<?php

use App\Http\Controllers\Homepage;
use App\Http\Controllers\authentication;
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

Route::get("/", [Homepage::class, "home"]);

Route::get("/login", [authentication::class, "login"]);

Route::post("/postlogin", [authentication::class, "post_login"]);

Route::get("/register", [authentication::class, "register"]);

Route::post("/postRegistration", [authentication::class, "post_registration"]);

Route::get("/logout", [authentication::class, "logout"]);

