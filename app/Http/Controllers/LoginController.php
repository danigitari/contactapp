<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller{


public function index(){
    return view('login');

}

public function store(Request $request){
    $this->validate($request, [
        'username' =>  'required',
        'password' =>  'required',]
    );

    if(!auth()->attempt($request->only('username','password'))) { 
        return back()->with('status','Invalid login details');
    }; 

    return redirect()->route('dashboard');
    //redirect()->route

}
}
