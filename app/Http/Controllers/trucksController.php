<?php

namespace App\Http\Controllers;

use App\truck;
use Illuminate\Http\Request;

class trucksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dataTruck = truck::all();
        return view('/truckManage',['dataTruck'=>$dataTruck]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('truckCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $truck = new truck;
        // $truck->name = $request->name;
        // $truck->plat = $request->plat;

        // $truck->save();

        //mass assignment
        // truck::create([
        //     'name'=>$request->name,
        //     'plat'=>$request->plat
        // ]);

        $request->validate([
            'name'=>'required|',
            'plat'=>'required'
        ]);
        truck::create($request->all());
        return redirect('/truck')->with('status','Success Insert New Truck');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(truck $truck)
    {
        return view('truckDetail',['detailTruck'=>$truck]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit(truck $truck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, truck $truck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy(truck $truck)
    {
        //
    }
}
