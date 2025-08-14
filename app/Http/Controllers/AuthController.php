<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login(){

        return view('front.auth.login');
    }

    public function loginSubmit(Request $request){

        // dd($request->all());

      $credentials=$request->validate([

            'email'=>'required|email',
            'password'=>  'required|min:6'


        ],[

            'email.email' => 'The :attribute field is mandatory.',
            'password.min' => 'password and email are not corrent',
            'email.required' => 'email is required',
            'password.required' => 'password  is required '
        ]);


        // dd($credentials);
        if(!Auth::attempt($credentials)){
 
            return back()->withErrors(['password'=> 'password and email are not corrent']);

        };

        return redirect()->route('products.index');

    }

    public function register(Request $request){

        return view('front.auth.register');

    }


    public function createUser(Request $request){

        // dd($request->all());

      $data=$request->validate([

            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>  'required|min:6'


        ]

           
        );


        // // dd($credentials);
        // if(!Auth::attempt($credentials)){
 
        //     return back()->withErrors(['password'=> 'password and email are not corrent']);

        // };

        User::create($data);

        return redirect()->route('auth.login');

    }



    public function logout(Request $request){



        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
        
    }
}
