<?php

use App\Http\Controllers\Homepage;
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

Route::get("/login", [Homepage::class, "login"]);

Route::post("/postlogin", [Homepage::class, "postlogin"]);

Route::get("/register", [Homepage::class, "register"]);

Route::post("/postRegistration", [Homepage::class, "postRegistration"]);

Route::get("/logout", [Homepage::class, "logout"]);