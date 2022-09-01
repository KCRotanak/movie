<?php

namespace App\Http\Controllers;

use App\Models\Soon;
use App\Http\Requests\StoreSoonRequest;
use App\Http\Requests\UpdateSoonRequest;

class SoonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soons = Soon::paginate(5);
    
        return view('soons.index',compact('soons'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Http\Requests\StoreSoonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSoonRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Soon::create($input);
     
        return redirect()->route('soons.index')
                        ->with('success','Movie created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soon  $soon
     * @return \Illuminate\Http\Response
     */
    public function show(Soon $soon)
    {
        return view('soons.show',compact('soon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soon  $soon
     * @return \Illuminate\Http\Response
     */
    public function edit(Soon $soon)
    {
        return view('soons.edit',compact('soon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSoonRequest  $request
     * @param  \App\Models\Soon  $soon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSoonRequest $request, Soon $soon)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',

        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $soon->update($input);
    
        return redirect()->route('soons.index')
                        ->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soon  $soon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soon $soon)
    {
        $soon->delete();
     
        return redirect()->route('soons.index')
                        ->with('success','Movie deleted successfully');
    }
}
