<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use Illuminate\Http\Request;


class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::latest()->paginate(5);
      
        return view('seats.index',compact('seats'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seats.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        Seat::create($request->all());
       
        return redirect()->route('seats.index')
                        ->with('success','Seat created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Seat $seat)
    {
        return view('seats.show',compact('seat'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit(Seat $seat)
    {
        return view('seats.edit',compact('seat'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seat  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seat $seat)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $seat->update($request->all());
      
        return redirect()->route('seats.index')
                        ->with('success','Seat updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seat  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seat $seat)
    {
        $seat->delete();
       
        return redirect()->route('seats.index')
                        ->with('success','seat deleted successfully');
    }
}