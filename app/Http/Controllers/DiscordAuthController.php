<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscordAuth;
use PhpOption\None;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Helpers\ActivityLog;

class DiscordAuthController extends Controller
{
    public function postDiscordAuth(Request $request) 
    {          
        $validated = $request->validate([
            'email' => 'required|email'
        ]);
    
        // Check if user has already an account, if not
        if (!(new DiscordAuth)->checkEmail($email=$validated['email']) && (new DiscordAuth)->checkIfMailIsAuth($email=$validated['email'])) {
            $password = uniqid();

            // Make account
            User::create([
                'name' => explode('@', $email)[0],
                'email' => $email,
                'password' => $password
            ]);

            ActivityLog::addToLog("Gebruiker aangemaakt");

            if (Auth::attempt(array('email' => $email, 'password' => $password))) {
                ActivityLog::addToLog("Gebruiker heeft ingelogd");
            } 

            return redirect('/')->with('status', "Je account is aangemaakt! Je wachtwoord is: $password");

        }
        
        // Redirect to login page
        return redirect('/login')->with('error', 'Er ging iets mis!');
    }
}