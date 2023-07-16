<?php

namespace App\Http\Controllers;

use App\Helpers\Activity_log;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;



class Authentication extends Controller
{



    public function login() 
    {

        return view("auth.login");
        
    }



    public function post_login(Request $request)
    {

        $validated = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($validated)) {
            $user = Auth::user()->name;
            Activity_log::add_to_log("Gebruiker $user heeft ingelogd");
            return redirect("/");
        } 
            
        Activity_log::add_to_log("Gefaalde login");
        return back()->with("error", "Aaah grutjes, je kon niet ingelogd worden! Waarschijnlijk zijn je gegevens onjuist! :o ");

    }



    public function register()
    {

        return view("auth.register");

    }



    public function post_registration(Request $request)
    {  

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
            
        $data = $request->all();
        $this->create($data);
        $user = Auth::user()->name;
        Activity_log::add_to_log("Gebruiker aangemaakt door $user");
        return back()->with("status", "Gebruiker is aangemaakt");

    }



    public function change_password()
    {

        return view("auth.password_reset");

    }



    public function post_change_password(Request $request)
    {

        $request->validate([
            "password" => "required",
            "password_second" => "required"
        ]);

        User::whereId(auth()->user()->id)->update([
            "password" => Hash::make($request->password)
        ]);

        $user = Auth::user()->name;
        Activity_log::add_to_log("Wachtwoord gewijzigd door $user");
        return back()->with("status", "Wachtwoord is succesvol gewijzigd!");

    }



    public function create(array $data)
    {

      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);

    }


    
    public function logout()
    {

        $user = Auth::user()->name;
        Activity_log::add_to_log("Gebruiker $user heeft uitgelogd");

        Session::flush();
        Auth::logout();

        return redirect("/login");
        
    }

}
