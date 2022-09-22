<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use App\Models\Theater;
use App\Models\Product;
use App\Models\Time;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::paginate(5);
    
        return view('schedules.index',compact('schedules'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theaters = Theater::get();
        $products = Product::get();
        $times = Time::get();
        return view('schedules.create',compact('theaters','products','times'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'productID' => 'required',
            'theaterID' => 'required',
            'date' => 'required',
        ]);
        // dd($request->moreFields);
        $saved = Schedule::create($request->all());
        if ($saved) {
            if ($request->moreFields) {
                foreach ($request->moreFields as $time) {
                    Time::create([
                        'scheduleID' => $saved->id,
                        'time' => $time,
                    ]);
                }
            }
        }




        return redirect()->route('schedules.index')
                        ->with('success','schedule created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        return view('schedules.show',compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('schedules.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        {
            $request->validate([
                'productID' => 'required',
                'theaterID' => 'required',
    
            ]);
      
          
            $schedule->update($request->all());
            return redirect()->route('scheduls.index')
                            ->with('success','schedule updated successfully');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
     
        return redirect()->route('schedules.index')
                        ->with('success','schedule deleted successfully');

    }
}
