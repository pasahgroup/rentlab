<?php

namespace App\Http\Controllers;

use App\Models\multbooking;
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
    public function store(StoremultbookingRequest $request)
    {
        //
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
