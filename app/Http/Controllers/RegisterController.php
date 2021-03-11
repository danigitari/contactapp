<?php

namespace App\Http\Controllers;


use App\User;
use App\DashBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request)
{
   $this->validate($request, [
    'username' =>  'required|max:255',
    'name' =>  'required|max:255',
    'email' => 'required|email',
    'password' =>  'required|confirmed',
        
   ]);

   User::create([
       'username' => $request->username,
       'name' => $request->name,
       'email' => $request->email,
       'password' => Hash::make($request->password),
   ]);
   
   auth()->attempt($request->only('username','password')); 


    return redirect('/login');
    
}
} 