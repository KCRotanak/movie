<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::get();
        return view('users.index',compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            // 'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required'
        ]);
        	User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'type' => $request['type'],
        
        ]);
    
        // User::create($request->all());
     
        return redirect()->route('users.index')
                        ->with('success','Users created successfully!');
    }


    public function show(User $user)
    {
        return view('users.show',compact('user'));

    }


    public function edit(user $user)
    {
        return view('users.edit',compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            // 'email' => 'required',
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}