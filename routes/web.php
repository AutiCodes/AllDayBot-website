<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\authentication;
use App\Http\Controllers\Statistics;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Homepage
Route::get("/", [Homepage::class, "home"]);


// Authentication
Route::get("/login", [authentication::class, "login"]);
Route::post("/postlogin", [authentication::class, "post_login"]);
Route::get("/register", [authentication::class, "register"]);
Route::post("/postRegistration", [authentication::class, "post_registration"]);
Route::get("/logout", [authentication::class, "logout"]);
Route::get("/wachtwoord-wijzigen", [authentication::class, "change_password"]);
Route::post("/post-wachtwoord-wijzigen", [authentication::class, "post_change_password"]);

// Statistics
Route::get("/statistieken/kanalen", [Statistics::class, "channels"]);
