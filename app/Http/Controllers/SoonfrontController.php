<?php

namespace App\Http\Controllers;

use App\Models\Soonfront;
use App\Models\Soon;
use App\Models\Slide;
use App\Http\Requests\StoreSoonfrontRequest;
use App\Http\Requests\UpdateSoonfrontRequest;

class SoonfrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($soons);
        
        $soons = Soon::all();
        $slideOnes = Slide::select()
        ->where('id', '1')
        ->get();

        $slides = Slide::select()
        ->where('id', '>=', '2')
        ->get();
        return view('frontend.comingsoon', compact('soons','slides', 'slideOnes'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSoonfrontRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoonfrontRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soonfront  $soonfront
     * @return \Illuminate\Http\Response
     */
    public function show(Soonfront $soonfront)
    {
        return view('soons.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soonfront  $soonfront
     * @return \Illuminate\Http\Response
     */
    public function edit(Soonfront $soonfront)
    {
        return view('soons.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoonfrontRequest  $request
     * @param  \App\Models\Soonfront  $soonfront
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoonfrontRequest $request, Soonfront $soonfront)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soonfront  $soonfront
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soonfront $soonfront)
    {
        //
    }
}
