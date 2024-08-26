<?php

namespace App\Http\Controllers;

use App\Models\multibooking;
use App\Models\Brand;
use App\Models\RentLog;
use App\Models\Seater;
use App\Models\Vehicle;
use App\Models\Cartype;
use App\Models\Tag;
use App\Models\Color;
use App\Models\Location;


use App\Http\Requests\StoremultbookingRequest;
use App\Http\Requests\UpdatemultbookingRequest;
use Illuminate\Http\Request;

class MultibookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $vehicles = Vehicle::with(['brand', 'seater'])->latest()->paginate(getPaginate());
        $tags = Tag::where('status',1)->get();      
      //dd($tags );

        $pageTitle = 'Multbooking';
        $empty_message = 'No vehicle has been added.';
        return view('admin.multibookings.index', compact('pageTitle', 'empty_message', 'vehicles','tags'));
  
    }

  public function add()
    {
        $pageTitle = 'Add Multbooking';
        $brands = Brand::active()->orderBy('name')->get();
        $cartypes = Cartype::orderBy('car_body_type')->get();
         $colors = Color::orderBy('color')->get();
 //dd($colors );
          $tags = Tag::where('status',1)->get(); 
           $locations = Location::where('status',1)->get();   

        $seaters = Seater::active()->orderBy('number')->get();
        return view('admin.multibookings.add', compact('pageTitle', 'brands', 'seaters','cartypes','tags','colors','locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremultbookingRequest  $request
     * @return \Illuminate\Http\Response
     */
   

    public function store(Request $request)
    {
      
     //dd('print_one');
        $request->validate([
            'brand_id' => 'required|integer|gt:0',
            'model_id' => 'required|integer|gt:0',
            'price' => 'required|numeric|gt:0',
            'no_days' => 'required|integer|gt:0',
            'total_costs' => 'required|numeric|gt:0',

            'pick_location' => 'required|string',
            'drop_location' => 'required|string',
           
            'pick_time' => 'required|string',
            'drop_time' => 'required|string',
        ]);

//dd('print');
        $multibooking = new multibooking();
        $multibooking->name =auth()->id();
        $multibooking->brand_id = $request->brand_id;
        $multibooking->model_id = $request->model_id;
        $multibooking->price = $request->price;
        $multibooking->no_days = $request->no_days;
        $multibooking->booked_by = $request->booked_by;
        $multibooking->total_costs = $request->total_costs;
        // $multibooking->transmission = $request->transmission;
        // $multibooking->fuel_type = $request->fuel_type;
        //  $multibooking->car_body_type_id = $request->car_body_type;
        //   $multibooking->tag_id = $request->tag;
        //    $multibooking->color_id = $request->color;
        //     $multibooking->location_id = $request->location;


        $multbooking->save();

        $notify[] = ['success', 'Order Added Successfully!'];
        return back()->withNotify($notify);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\multbooking  $multbooking
     * @return \Illuminate\Http\Response
     */
    public function show(multbooking $multbooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\multbooking  $multbooking
     * @return \Illuminate\Http\Response
     */
    public function edit(multbooking $multbooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemultbookingRequest  $request
     * @param  \App\Models\multbooking  $multbooking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemultbookingRequest $request, multbooking $multbooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\multbooking  $multbooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(multbooking $multbooking)
    {
        //
    }
}
