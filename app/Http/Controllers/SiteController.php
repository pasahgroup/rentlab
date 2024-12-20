<?php

namespace App\Http\Controllers;
use App\Models\AdminNotification;
use App\Models\Frontend;
use App\Models\Language;
use App\Models\Location;
use App\Models\Page;
use App\Models\Plan;
use App\Models\PlanLog;
use App\Models\Cartype;
use App\Models\Tag;
use App\Models\service;


use App\Models\Subscriber;
use App\Models\SupportAttachment;
use App\Models\SupportMessage;
use App\Models\SupportTicket;
use Carbon\Carbon;
use App\Models\Vehicle;

use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function __construct(){
        $this->activeTemplate = activeTemplate();
    }

    public function index(){
         //dd($this->activeTemplate);
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','home')->count();
      // dd($count);
        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'HOME';
            $page->slug = 'home';
            $page->save();
        }

        $reference = @$_GET['reference'];
        if ($reference) {
            session()->put('reference', $reference);
        }

$carbodytypes = cartype::orderby('car_body_type')
->groupBy('car_body_type')
->get();

$carTags = Tag::orderby('tag')
->groupBy('tag')
->get();

$models = Vehicle::orderby('model')
->select('model')
->groupBy('model')
->get();


 $vehicles = Vehicle::join('brands','brands.id','vehicles.brand_id')
 ->select('vehicles.id','vehicles.model','vehicles.brand_id','vehicles.price','vehicles.images','vehicles.car_model_no','vehicles.transmission','vehicles.fuel_type','vehicles.doors','vehicles.specifications','brands.name')
 ->groupBy('vehicles.model')
 ->paginate(getPaginate(4));
//dd($vehicles);

 $metaFirstVehicle = Vehicle::join('cartypes','cartypes.id','vehicles.car_body_type_id')
      ->select('vehicles.*','cartypes.car_body_type')
     ->first();
     //dd($metaFirstVehicles)

  $metaVehicles = Vehicle::join('cartypes','cartypes.id','vehicles.car_body_type_id')
      ->select('vehicles.*','cartypes.car_body_type')
     ->paginate(getPaginate(8));
     $metaVehicleCount=$metaVehicles->count();
    // dd($metaVehicles->count());
    // $metavehicles = collect($metaVehicles);
//$vehicles = Vehicle::active()->latest()->paginate(4);
 //dd($metaVehicles->count());

        $pageTitle = 'Home';
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','home')->first();


$main_service=service::where('category','Main')->where('status','1')->first();
$escort=service::where('service_name','Escort')->where('status','1')->first();
$wedding=service::where('service_name','Wedding')->where('status','1')->first();


$car_hiring=service::where('service_name','car_hiring')->where('status','1')->first();
//dd($wedding);
 $services=service::get();

        // $services=collect($services);

//dd($services->where('category','Main')->where('status','1')->category);
// $model_key = 3;
// $services = $services->Where('id', $model_key)->Where('status',1);

//$services=$services->where('category','Main')->where('status','1');

        return view($this->activeTemplate . 'homem', compact('pageTitle','services','main_service','sections','wedding','escort','car_hiring','vehicles','carbodytypes','carTags','models','metaVehicles','metaVehicleCount','metaFirstVehicle'));
    }



    public function pages($slug)
    {
        $page = Page::where('tempname',$this->activeTemplate)->where('slug',$slug)->firstOrFail();
        $pageTitle = $page->name;
        $sections = $page->secs;
        return view($this->activeTemplate . 'pages', compact('pageTitle','sections'));
    }




public function show(Request $request,$id)
    {

    if(request('carType')){
   $vehicles = Vehicle::join('cartypes','cartypes.id','vehicles.car_body_type_id')
      ->where('cartypes.car_body_type',$id)
       ->where('vehicles.brand_id',request('brand'))
        ->where('vehicles.seater_id',request('seats'))
         ->groupBy('vehicles.model')
     ->select('vehicles.*','cartypes.car_body_type')
       ->paginate(getPaginate(8));
}else{

   $vehicles = Vehicle::join('cartypes','cartypes.id','vehicles.car_body_type_id')
      ->where('cartypes.car_body_type',$id)
     ->groupBy('vehicles.model')
     ->select('vehicles.*','cartypes.car_body_type')
      ->paginate(getPaginate(8));
}


          $metaVehicles = Vehicle::join('cartypes','cartypes.id','vehicles.car_body_type_id')
      ->select('vehicles.*','cartypes.car_body_type')
      ->get();

    $metavehicles = collect($metaVehicles);
   //dd($metavehicles->where('car_body_type','SUV')->count());


    $cartypes = Cartype::where('status','1')->get();
        $pageTitle = $id;
    // dd($cartypes);

        return view($this->activeTemplate . 'carbodytypes.carbodytype', compact('vehicles','cartypes','metaVehicles','pageTitle','id'));
    }

    public function carTag(Request $request,$id)
    {
  if(request('carTag')){
    $vehicles = Vehicle::join('tags','tags.id','vehicles.tag_id')
      ->where('tags.tag',$id)
       ->where('vehicles.brand_id',request('brand'))
        ->where('vehicles.seater_id',request('seats'))
     ->select('vehicles.*','tags.tag')
      ->get();
      //dd($vehicles);
 }else{
  $vehicles = Vehicle::join('tags','tags.id','vehicles.tag_id')
      ->where('tags.tag',$id)
     ->select('vehicles.*','tags.tag')
      ->get();
}

  $metaVehicles = Vehicle::join('tags','tags.id','vehicles.tag_id')
      ->select('vehicles.*','tags.tag')
      ->get();

    $metavehicles = collect($metaVehicles);
   //dd($metavehicles->where('car_body_type','SUV')->count());

    $cartags = Tag::where('status','1')->get();
        $pageTitle = $id;
    // dd($cartypes);

        return view($this->activeTemplate.'carbodytypes.cartag', compact('vehicles','cartags','metaVehicles','pageTitle','id'));
    }


    public function carView(Request $request,$id)
    {
  if(request('carTag')){
    $vehicles = Vehicle::join('tags','tags.id','vehicles.tag_id')
      ->where('tags.tag',$id)
       ->where('vehicles.brand_id',request('brand'))
        ->where('vehicles.seater_id',request('seats'))
     ->select('vehicles.*','tags.tag')
        ->paginate(4);

      //dd($vehicles);
  }else{
  $vehicles = Vehicle::join('tags','tags.id','vehicles.tag_id')
      ->where('tags.tag',$id)
     ->select('vehicles.*','tags.tag')
        ->paginate(4);
  }

  $metaVehicles = Vehicle::join('tags','tags.id','vehicles.tag_id')
      ->select('vehicles.*','tags.tag')
      ->get();

    $metavehicles = collect($metaVehicles);
   //dd($metavehicles->where('car_body_type','SUV')->count());

    $cartags = Tag::where('status','1')->get();
        $pageTitle = $id;
    // dd($cartypes);

        return view($this->activeTemplate.'carview.carview', compact('vehicles','cartags','metaVehicles','pageTitle','id'));
    }







    public function contact()
    {
        $pageTitle = "Contact Us";
        return view($this->activeTemplate.'contact',compact('pageTitle'));
    }


    public function contactSubmit(Request $request)
    {

        $attachments = $request->file('attachments');
        $allowedExts = array('jpg', 'png', 'jpeg', 'pdf');

        $this->validate($request, [
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'subject' => 'required|max:100',
            'message' => 'required',
        ]);


        $random = getNumber();

        $ticket = new SupportTicket();
        $ticket->user_id = auth()->id() ?? 0;
        $ticket->name = $request->name;
        $ticket->email = $request->email;
        $ticket->priority = 2;


        $ticket->ticket = $random;
        $ticket->subject = $request->subject;
        $ticket->last_reply = Carbon::now();
        $ticket->status = 0;
        $ticket->save();

        $adminNotification = new AdminNotification();
        $adminNotification->user_id = auth()->user() ? auth()->user()->id : 0;
        $adminNotification->title = 'A new support ticket has opened ';
        $adminNotification->click_url = urlPath('admin.ticket.view',$ticket->id);
        $adminNotification->save();

        $message = new SupportMessage();
        $message->supportticket_id = $ticket->id;
        $message->message = $request->message;
        $message->save();

        $notify[] = ['success', 'ticket created successfully!'];

        return redirect()->route('ticket.view', [$ticket->ticket])->withNotify($notify);
    }

    public function changeLanguage($lang = null)
    {
        $language = Language::where('code', $lang)->first();
        if (!$language) $lang = 'en';
        session()->put('lang', $lang);
        return redirect()->back();
    }

    public function blogs(){
        $blogs = Frontend::where('data_keys','blog.element')->paginate(getPaginate());
        $pageTitle = 'Blogs';
        return view($this->activeTemplate.'blogs.all',compact('blogs','pageTitle'));
    }

    public function blogDetails($id,$slug){
        $blog = Frontend::where('id',$id)->where('data_keys','blog.element')->firstOrFail();
        $blog->increment('views');

        $recent_blogs = Frontend::where('data_keys','blog.element')->where('id', '!=', $id)->take(5)->get();

        $pageTitle = 'Blog Details';
        return view($this->activeTemplate.'blogs.blog_details',compact('blog','pageTitle', 'recent_blogs'));
    }

    public function policyPages($id,$slug){
        $policy = Frontend::where('id',$id)->where('data_keys','policy_pages.element')->firstOrFail();
        $pageTitle = $policy->data_values->title;
        return view($this->activeTemplate.'policy_details',compact('policy','pageTitle'));
    }

    public function cookieAccept(){
        session()->put('cookie_accepted',true);
        return response()->json(['success' => 'Cookie accepted successfully']);
    }

    public function placeholderImage($size = null){
        $imgWidth = explode('x',$size)[0];
        $imgHeight = explode('x',$size)[1];
        $text = $imgWidth . '×' . $imgHeight;
        $fontFile = realpath('assets/font') . DIRECTORY_SEPARATOR . 'RobotoMono-Regular.ttf';
        $fontSize = round(($imgWidth - 50) / 8);
        if ($fontSize <= 9) {
            $fontSize = 9;
        }
        if($imgHeight < 100 && $fontSize > 30){
            $fontSize = 30;
        }

        $image     = imagecreatetruecolor($imgWidth, $imgHeight);
        $colorFill = imagecolorallocate($image, 100, 100, 100);
        $bgFill    = imagecolorallocate($image, 175, 175, 175);
        imagefill($image, 0, 0, $bgFill);
        $textBox = imagettfbbox($fontSize, 0, $fontFile, $text);
        $textWidth  = abs($textBox[4] - $textBox[0]);
        $textHeight = abs($textBox[5] - $textBox[1]);
        $textX      = ($imgWidth - $textWidth) / 2;
        $textY      = ($imgHeight + $textHeight) / 2;
        header('Content-Type: image/jpeg');
        imagettftext($image, $fontSize, 0, $textX, $textY, $colorFill, $fontFile, $text);
        imagejpeg($image);
        imagedestroy($image);
    }

    public function subscribe()
    {
        $rules = [
            'email' => 'required|email|unique:subscribers,email'
        ];

        $validator = validator()->make(\request()->all(), $rules);
        if ($validator->fails()){
            return response()->json(['error' => $validator->errors()->getMessages()]);
        }

        $subscribe = new Subscriber();
        $subscribe->email = \request()->email;
        $subscribe->save();

        return response()->json(['success' => true,'message' => 'Thanks for subscribe!']);
    }

    //Plan purchase
    public function plans(){
        $plans = Plan::active()->get();
        $locations = Location::active()->orderBy('name')->get();

        $pageTitle = 'Pricing Plans';
        return view($this->activeTemplate.'plans.index',compact('plans','pageTitle', 'locations'));
    }

    public function planBooking(Request $request, $id){
        $request->validate([
            'pick_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()),
            'pick_time' => 'required|date_format:m/d/Y h:i a|after_or_equal:today'
        ]);

        $plan = Plan::active()->where('id', $id)->firstOrFail();

        $plan_log = new PlanLog();
        $plan_log->user_id = auth()->id();
        $plan_log->plan_id = $plan->id;
        $plan_log->pick_location = $request->pick_location;
        $plan_log->pick_time = Carbon::parse($request->pick_time);
        $plan_log->drop_time = Carbon::parse($request->pick_time)->addDays($plan->days);
        $plan_log->price = getAmount($plan->price);
        $plan_log->save();

        session(['plan_id' => $plan_log->id]);

        return redirect()->route('user.deposit');
    }
}
