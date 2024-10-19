<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Location;
use App\Models\RentLog;
use App\Models\Seater;
use App\Models\Vehicle;
use App\Models\multibooking;
use App\Models\Deposit;

use Carbon\Carbon;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
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




    public function vehicleBookingConfirm(Request $request, $id)
    {
//dd(request('pick_location'));

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

        $rent->price = getAmount(request('total_costs'));
        $rent->total_cost = getAmount(request('total_costs'));
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
       

        $rent->price = getAmount($total_price);
         $rent->total_cost = getAmount($total_price);
        $rent->save();

}

        session(['rent_id' => $rent->id]);
        //Origin Route
        //dd('Inserted');
        // return redirect()->route('user.deposit');
       //dd('print testxx');
         
//Insert into deposits table
        //   $request->validate([
        //     'method_code' => 'required',
        //     'currency' => 'required',
        // ]);

        if (!session()->has('rent_id') && !session()->has('plan_id')){
            $notify[] = ['error', 'Invalid request!'];
            return back()->withNotify($notify);
        }

        $user = auth()->user();
        // $gate = GatewayCurrency::whereHas('method', function ($gate) {
        //     $gate->where('status', 1);
        // })->where('method_code', $request->method_code)->where('currency', $request->currency)->first();
        // if (!$gate) {
        //     $notify[] = ['error', 'Invalid gateway'];
        //     return back()->withNotify($notify);
        // }

        if (session()->has('rent_id')){
            $rent_log = RentLog::findOrFail(session('rent_id'));
            $amount = $rent_log->price;
        } elseif(session()->has('plan_id')) {
            $plan_log = PlanLog::findOrFail(session('plan_id'));
            $amount = $plan_log->price;
        }

        // if ($gate->min_amount > $amount || $gate->max_amount < $amount) {
        //     $notify[] = ['error', 'Please follow payment limit'];
        //     return back()->withNotify($notify);
        // }

       

         // $down_payment=request('down_payment');
      $down_payment=6000;
       // $charge = $gate->fixed_charge + ($amount * $gate->percent_charge / 100);
        // $payable = $amount + $charge;
         $payable = $amount;
        // $final_amo = $payable * $gate->rate;
         $final_amo = $payable;

        $data = new Deposit();
        $data->user_id = $user->id;
        $data->rent_id = session('rent_id') ?? 0;
        $data->plan_id = session('plan_id') ?? 0;
        // $data->method_code = $gate->method_code;
        // $data->method_currency = strtoupper($gate->currency);
          $data->method_code = 999;
        $data->method_currency ="USD";
        $data->amount = $amount;
        // $data->charge = $charge;
        // $data->rate = $gate->rate;

          $data->charge =10;
        $data->rate =2300;
        $data->final_amo = $final_amo;
  
  $data->paid = $down_payment;
  $data->remain_balance = $amount-$down_payment;

        $data->btc_amo = 0;
        $data->btc_wallet = "";
        $data->trx = getTrx();
        $data->try = 0;
        $data->status = 0;
        $data->save();


//dd('print');
        //Get value from rentlab
        // $rentLogs = RentLog::->where('id', $id)->firstOrFail(); 
 return redirect()->route('user.pesapal',$data->id);        


        // return redirect()->route('user.deposit.manual.confirm');
    }



 public function pesapal(Request $request,$id)
    {
          //dd('print');
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
