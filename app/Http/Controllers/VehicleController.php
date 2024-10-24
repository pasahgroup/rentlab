<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Location;
use App\Models\RentLog;
use App\Models\Seater;
use App\Models\Vehicle;
use App\Models\multibooking;
use App\Models\Deposit;
use Illuminate\Support\Facades\Validator;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
include_once(app_path().'/pesapal/oauth.php');

class VehicleController extends Controller
{
     // include_once(app_path().'/pesapal/oauth.php');

    public function __construct(){
        $this->activeTemplate = activeTemplate();
    }

    public function vehicles(){
        $brands = Brand::active()->withCount('vehicles')->orderBy('name')->get();
        $seats = Seater::active()->withCount('vehicles')->orderBy('number')->get();

//dd($brands);
        $vehicles = Vehicle::active()->latest()->paginate(getPaginate());
        $pageTitle = 'All Vehicles';
        return view($this->activeTemplate.'vehicles.index',compact('vehicles','pageTitle', 'brands', 'seats'));
    }


    public function vehicleDetails($id, $slug){
        $vehicle = Vehicle::active()->where('id', $id)->with('ratings')->withCount('ratings')->withAvg('ratings', 'rating')->firstOrFail();
        $rental_terms = getContent('rental_terms.content', true);
        $pageTitle = 'Vehicle Details';
        return view($this->activeTemplate.'vehicles.details',compact('vehicle','pageTitle', 'rental_terms'));
    }

    public function vehicleBooking($id, $slug){
        if (!auth()->check()){
            $notify[] = ['error', 'Please login to continue!'];
            return back()->withNotify($notify);
        }

//dd($this->activeTemplate);

        $vehicle = Vehicle::active()->where('id', $id)->firstOrFail();
        $locations = Location::active()->orderBy('name')->get();
        $pageTitle = 'Vehicle Booked by '.auth()->user()->firstname .' '.auth()->user()->lastname;
        return view($this->activeTemplate.'vehicles.booking',compact('vehicle','pageTitle', 'locations'));
    }


 public function addBooking(Request $request,$id){
        if (!auth()->check()){
            $notify[] = ['error', 'Please login to continue!'];
            return back()->withNotify($notify);
        }

//dd($id);

// if($id==1){
// $id=1;
// }else{
// $id=request('carModel');
// }
  
  //dd(request('bookingID'));
  $bookingID=request('bookingID');
 // dd($bookingID);
 if(request('carModel')!=null)
 {
   $vehicle = Vehicle::active()->where('id',request('carModel'))->firstOrFail();      
 }else{
       $vehicle = Vehicle::active()->where('id',1)->firstOrFail();

       }  


         $vehicles = Vehicle::groupby('model')->get();
 
         
     //dd($vehicle);
        $locations = Location::active()->orderBy('name')->get();
        $pageTitle = 'Vehicle Booked by '.auth()->user()->firstname .' '.auth()->user()->lastname;
        return view($this->activeTemplate.'user.pesapal.addcar',compact('vehicle','vehicles','pageTitle', 'locations','bookingID'));
    }




 public function addCar(Request $request,$id){
        if (!auth()->check()){
            $notify[] = ['error', 'Please login to continue!'];
            return back()->withNotify($notify);
        }

//dd($this->activeTemplate);

// if($id==1){
// $id=1;
// }else{
// $id=request('carModel');
// }
  
  $bookingID=request('bookingID');
if(request('carModel')!=null)
 {
   $vehicle = Vehicle::active()->where('id',request('carModel'))->firstOrFail();     
 }else{
       $vehicle = Vehicle::active()->where('id',1)->firstOrFail();

       }  

         $vehicles = Vehicle::groupby('model')->get();
     //dd($vehicle);
        $locations = Location::active()->orderBy('name')->get();
        $pageTitle = 'Vehicle Booked by '.auth()->user()->firstname .' '.auth()->user()->lastname;
        return view($this->activeTemplate.'user.pesapal.addcar',compact('vehicle','vehicles','pageTitle', 'locations','bookingID'));
    }




    public function vehicleBookingConfirm(Request $request, $id)
    {
//dd(request('bookingID'));

 if(request('multi-booking')){
    //dd('popo');
             
            $request->validate([
            'pick_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()),
            //'drop_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()).'|not_in:'.$request->pick_location,

             'drop_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()),
             'pick_time' => 'required|integer',           
             'pick_time' => 'required|after_or_equal:today',
             // 'drop_time' => 'required|date_format:Y-m-d h:i|after_or_equal:'. $request->pick_time,
        ],[
            'drop_location.not_in' => 'Please choose different location!'
        ]);
         }
         else{
               $request->validate([
            'pick_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()),
            //'drop_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()).'|not_in:'.$request->pick_location,

             'drop_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()),
             'pick_time' => 'required|integer',           
             'pick_time' => 'required|date_format:m/d/Y h:i a|after_or_equal:today',
             'drop_time' => 'required|date_format:m/d/Y h:i a|after_or_equal:'. $request->pick_time,
                     ],[
            'drop_location.not_in' => 'Please choose different location!'
        ]);
    }


//dd(request('drop_time'));

    $pick_time = new Carbon($request->pick_time);
    $drop_time = new Carbon($request->drop_time);


if(request('multi-booking'))
{
    $total_days = $pick_time->diffInDays($drop_time) +1;
   $pin=rand(111111,999999);

 $rent = new RentLog();
        $rent->user_id = auth()->id();
        $rent->vehicle_id = $pin;
        $rent->model_name = $vehicle->model;
           $rent->no_car =request('no_car');

        $rent->pick_location = $request->pick_location;
        $rent->drop_location = $request->drop_location;
        $rent->pick_time = $pick_time;
        $rent->drop_time = $drop_time;
          $rent->no_day =$total_days;

        $rent->price =$vehicle->price;
        $rent->total_cost = getAmount(request('total_costs'));
        $rent->discount =0.00;
        $rent->balance =getAmount(request('total_costs'))-$rent->discount;

        $rent->save();

}else

{

 $vehicle = Vehicle::active()->where('id', $id)->firstOrFail();
        $total_days = $pick_time->diffInDays($drop_time) +1;
        $total_price = $vehicle->price*$total_days* request('no_car');

        $rent = new RentLog();
        $rent->user_id = auth()->id();
        $rent->vehicle_id = $vehicle->id;
        
         $rent->model_name = $vehicle->model;

         $rent->no_car =request('no_car');

        $rent->pick_location = $request->pick_location;
        $rent->drop_location = $request->drop_location;
        $rent->pick_time = $pick_time;
        $rent->drop_time = $drop_time;
         $rent->no_day =$total_days;
       

        $rent->price =$vehicle->price;
         $rent->total_cost = getAmount($total_price);
         $rent->discount =0.00;
        $rent->balance =getAmount($total_price)-$rent->discount;

        $rent->save();

}

        session(['rent_id' => $rent->id]);
      

        if (!session()->has('rent_id') && !session()->has('plan_id')){
            $notify[] = ['error', 'Invalid request!'];
            return back()->withNotify($notify);
        }

        $user = auth()->user();

        if (session()->has('rent_id')){
            $rent_log = RentLog::findOrFail(session('rent_id'));
            $amount = $rent_log->price;
        } elseif(session()->has('plan_id')) {
            $plan_log = PlanLog::findOrFail(session('plan_id'));
            $amount = $plan_log->price;
        }

      $down_payment=0;
       // $charge = $gate->fixed_charge + ($amount * $gate->percent_charge / 100);
        // $payable = $amount + $charge;
         $payable = $amount;
        // $final_amo = $payable * $gate->rate;
         $final_amo = $payable;



if(request('bookingID')!=null)
{
 $updateBookingColumn = RentLog::where('id',$rent->id)
->update([
        'booking_id'=>request('bookingID')
            ]);
$deposits=Deposit::findOrFail($id);
//dd($deposits);

 $updateData = Deposit::where('booking_id',request('bookingID'))
->update([        
      'user_id' => $user->id,
       'rent_id' => session('rent_id') ?? 0,
       'plan_id' => session('plan_id') ?? 0,
        'booking_id' =>$rent->id,

           'method_code' => 999,
        'method_currency' =>"USD",
      'amount' => $amount,
        // $data->charge = $charge;
        // $data->rate = $gate->rate;

       'charge' =>10,
       'rate' =>2300,
        'final_amo' => $final_amo,
  
'paid' => $down_payment,
  'remain_balance' => $amount-$down_payment,

        'btc_amo' => 0,
       'btc_wallet' => "",
      'trx' => getTrx(),
       'try' => 0,
        'status' => 0

            ]);

//dd('print1');

}
else{
       $updateBookingColumn = RentLog::where('id',$rent->id)
->update([
        'booking_id'=>$rent->id
            ]);

 $vehicle = Vehicle::active()->where('id', $id)->firstOrFail();
        $total_days = $pick_time->diffInDays($drop_time) +1;
        $total_price = $vehicle->price*$total_days* request('no_car');


  $data = new Deposit();
        $data->user_id = $user->id;
        $data->rent_id = session('rent_id') ?? 0;
        $data->plan_id = session('plan_id') ?? 0;
        $data->booking_id =$rent->id;

        // $data->method_code = $gate->method_code;
        // $data->method_currency = strtoupper($gate->currency);
          $data->method_code = 999;
        $data->method_currency ="USD";
        $data->amount = $amount;
        // $data->charge = $charge;
        // $data->rate = $gate->rate;

          $data->charge =10;
        $data->rate =2300;
        $data->final_amo = $total_price;
  
  $data->paid =0.00;
  $data->remain_balance = $total_price-$payable;

        $data->btc_amo = 0;
        $data->btc_wallet = "";
        $data->trx = getTrx();
        $data->try = 0;
        $data->status = 0;
        $data->save();
        //dd('print2');
}

//dd('print');
        //Get value from rentlab
        // $rentLogs = RentLog::->where('id', $id)->firstOrFail();


 // return redirect()->route('user.pesapal',$data->id);        
 return redirect()->route('user.pesapal',$rent->id);   

        // return redirect()->route('user.deposit.manual.confirm');
    }



 public function pesapal(Request $request,$id)
    {
          //dd($id);
         //$track = session()->get('Track');
        // dd($track);
        // $data = Deposit::where('trx', $track)->where('status',0)->orderBy('id', 'DESC')->firstOrFail();
    //$data = Deposit::get();
        //dd($data);
         $locations = Location::active()->orderBy('name')->get();
        $times=RentLog::findOrFail($id);
            //dd($times);
        $vehicle = Vehicle::active()->where('id', $times->vehicle_id)->firstOrFail();
         //dd($vehicle);
       // $times=RentLog::findOrFail($id);
         //dd($times);

         $datas=RentLog::join('vehicles','vehicles.id','rent_logs.vehicle_id')
         ->where('rent_logs.booking_id',$times->booking_id)
         ->select('vehicles.name','rent_logs.pick_time','rent_logs.drop_time','rent_logs.model_name','rent_logs.price','rent_logs.discount','rent_logs.no_car','rent_logs.no_day','rent_logs.total_cost')
         ->get();


 // $totals = RentLog::select(['rent_logs.*',
 // DB::raw('SUM(total_cost) as total_revenue'),
 // DB::raw('SUM(discount) as total_cash')
 // ])->get();


  $totals = RentLog::select(DB::raw('SUM(total_cost) as total_cost'),DB::raw('SUM(discount) as Discount'),DB::raw('SUM(total_cost)-SUM(discount)-sum(total_cost)*0.18 as Grant_total'),DB::raw('sum(total_cost)*0.18 as VAT'))
  ->where('booking_id',$times->booking_id)
  ->first();

        //$answerPerc=DB::select('select sum(total_cost)toc,sum(discount)disc from rent_logs');
        //dd($totals);



        $pageTitle = 'Payment Preview';
          return view($this->activeTemplate . 'user.pesapal.pesapal', compact('datas', 'pageTitle','times','vehicle','locations','totals'));
    }


 public function payConfirmx(Request $request,$id)
    {
          dd($id);
         //$track = session()->get('Track');
        // dd($track);
        // $data = Deposit::where('trx', $track)->where('status',0)->orderBy('id', 'DESC')->firstOrFail();
    //$data = Deposit::get();
        //dd($data);
        $times=RentLog::findOrFail($id);
         
         $datas=RentLog::join('vehicles','vehicles.id','rent_logs.vehicle_id')
         ->where('rent_logs.id',$id)
         ->select('vehicles.name','rent_logs.pick_time','rent_logs.drop_time','rent_logs.model_name','rent_logs.price','rent_logs.discount','rent_logs.no_car','rent_logs.no_day','rent_logs.total_cost')
         ->get();
 //dd($datas);

        $pageTitle = 'Payment Preview';
          return view($this->activeTemplate . 'user.pesapal.pesapal', compact('datas', 'pageTitle','times'));
    }


    public function payConfirm(Request $request,$id)
    {   


$amount_percent=request('percent_downpayment')*request('total_cost');

if(request('amount')<$amount_percent)
{
 return redirect()->back()->with('error','Down Payment must not below 30% of total booking costs.');
}

// Fetching JSON
$req_url = 'https://api.exchangerate-api.com/v4/latest/USD';
$response_json = file_get_contents($req_url);

//dd($response_json);
// Continuing if we got a result
if(false !== $response_json) {

    // Try/catch for json_decode operation
    try {
    // Decoding
    $response_object = json_decode($response_json);
$first_name=request('first_name');
$last_name=request('last_name');
$desc=request('desc');
$email=request('email');
$phone=request('phone');

$type=request('type');
$amount=request('amount');
$currency=request('currency');
$status=1;

 // dd($amount);

// dd(number_format($amount, 2));
    // YOUR APPLICATION CODE HERE, e.g.
    //$base_price =$amount; // Your price in USD
    $amount = (float)$amount;


$base_price=($response_object->rates->TZS/$response_object->rates->$currency);

 // $defaultCurrency2=($response_object->rates->$currency);
    $to_bepaid = round(($amount * $base_price), 2);
     //dd($to_bepaid);
 
    }
    catch(Exception $e) {
        // Handle JSON parse error...
    }
}
 
    //dd('print');
 //return response()->json(['url' => redirect('https://payments.pesapal.com/palatialtours',compact(['first_name','status']));
//return redirect('https://payments.pesapal.com/palatialtours',compact('status'));
$pageTitle="Payment";
return view($this->activeTemplate . 'user.pesapal.pesapal_payment',compact('first_name','last_name','currency','to_bepaid','desc','email','phone','type','pageTitle'));  

    }

    public function vehicleSearch(Request $request)
    {
        $brands = Brand::active()->withCount('vehicles')->orderBy('name')->get();
        $seats = Seater::active()->withCount('vehicles')->orderBy('number')->get();

        $vehicles = Vehicle::active();
        $pageTitle = 'Vehicle Search';

        if ($request->name) {
            $vehicles->where('name', 'LIKE', "%{$request->name}%");
        }

        if ($request->brand) {
            $vehicles->where('brand_id', $request->brand);
        }

        if ($request->seats){
            $vehicles = $vehicles->orWhere('seater_id', $request->seats);
        }

        if ($request->model){
            $vehicles->orWhere('model', 'LIKE', "%$request->model%");
        }

        if ($request->min_price){
            $vehicles->where('price', '>=', $request->min_price);
        }

        if ($request->max_price){
            $vehicles->where('price', '<=', $request->max_price);
        }

        $vehicles = $vehicles->latest()->paginate(10)->withQueryString();

      //dd($vehicles);
        return view($this->activeTemplate.'vehicles.index',compact('vehicles','pageTitle', 'brands', 'seats'));
    }

    public function brandVehicles($brand_id, $slug)
    {
        $brands = Brand::active()->withCount('vehicles')->orderBy('name')->get();
        $seats = Seater::active()->withCount('vehicles')->orderBy('number')->get();

        $vehicles = Vehicle::active()->where('brand_id', $brand_id)->latest()->paginate(6);
        $pageTitle = 'Brand Vehicles';

        return view($this->activeTemplate.'vehicles.index',compact('vehicles','pageTitle', 'brands', 'seats'));
    }

    public function seaterVehicles($seat_id)
    {
        $brands = Brand::active()->withCount('vehicles')->orderBy('name')->get();
        $seats = Seater::active()->withCount('vehicles')->orderBy('number')->get();

        $vehicles = Vehicle::active()->where('seater_id', $seat_id)->latest()->paginate(6);
        $pageTitle = 'Vehicles Seating';

        return view($this->activeTemplate.'vehicles.index',compact('vehicles','pageTitle', 'brands', 'seats'));
    }


}
