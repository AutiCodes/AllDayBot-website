<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;


class Homepage extends Controller
{


    public function home()
    {   
        $Homemodel = new Home;

        if (Auth::check()) {
            return view("home", ["data" => $Homemodel->home_stats()]);
        } else {
            return redirect("/login");
        }
    }



    public function login() 
    {
        return view("auth.login");
    }



    public function postlogin(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $credentials = $request->only("email", "password");
        
        if (Auth::attempt($credentials)) {
            return redirect()->intended("/")->withSucces("Je bent ingelogd");
        } else {
            return redirect("/login")->withSucces("Aah er ging iets mis");
        }

    }



    public function register()
    {
        if (Auth::check()) {
            return view("auth.register");
        }
    }



    public function postRegistration(Request $request)
    {  

        if (Auth::check()) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);
               
            $data = $request->all();

            return redirect("/")->withSuccess('Great! You have Successfully loggedin');
        }

    }



    public function create(array $data)
    {

      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
      
    }

}
