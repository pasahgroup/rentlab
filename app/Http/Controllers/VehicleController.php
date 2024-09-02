<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Location;
use App\Models\RentLog;
use App\Models\Seater;
use App\Models\Vehicle;
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
//dd(request('no_car'));



        $request->validate([
            'pick_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()),
            //'drop_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()).'|not_in:'.$request->pick_location,

             'drop_location' => 'required|integer|in:'.join(',', Location::active()->orderBy('name')->pluck('id')->toArray()),
             'pick_time' => 'required|date_format:m/d/Y h:i a|after_or_equal:today',
             'drop_time' => 'required|date_format:m/d/Y h:i a|after_or_equal:'. $request->pick_time,

        ],[
            'drop_location.not_in' => 'Please choose different location!'
        ]);


      $pick_time = new Carbon($request->pick_time);
    $drop_time = new Carbon($request->drop_time);

if(request('multi-booking'))
{

   $pin=rand(111111,999999);


 $rent = new RentLog();
        $rent->user_id = auth()->id();
        $rent->vehicle_id = $pin;
        $rent->pick_location = $request->pick_location;
        $rent->drop_location = $request->drop_location;
        $rent->pick_time = $pick_time;
        $rent->drop_time = $drop_time;
       

        $rent->price = getAmount(request('total_costs'));
        $rent->save();

}else

{

//dd(request('pick_location'));
        //Checking booked or not
        // if ($vehicle->booked()){
        //     $notify[] = ['error', 'This vehicle is booked!'];
        //     return back()->withNotify($notify);
        // }



 $vehicle = Vehicle::active()->where('id', $id)->firstOrFail();
  

        $total_days = $pick_time->diffInDays($drop_time) +1;
        $total_price = $vehicle->price*$total_days* request('no_car');

        $rent = new RentLog();
        $rent->user_id = auth()->id();
        $rent->vehicle_id = $vehicle->id;
        $rent->pick_location = $request->pick_location;
        $rent->drop_location = $request->drop_location;
        $rent->pick_time = $pick_time;
        $rent->drop_time = $drop_time;
       

        $rent->price = getAmount($total_price);
        $rent->save();

}

        session(['rent_id' => $rent->id]);

//dd('ppd');
        return redirect()->route('user.deposit');
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
