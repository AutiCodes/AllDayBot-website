<?php

use App\Http\Controllers\Bot_settings;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\Statistics;
use App\Http\Controllers\System;
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
Route::get("/", [Homepage::class, "home"])->middleware("auth");


// Authentication
Route::get("/login", [Authentication::class, "login"])->name("login");
Route::post("/postlogin", [Authentication::class, "post_login"]);

Route::get("/registreer", [Authentication::class, "register"])->middleware("auth");
Route::post("/post_registreer", [Authentication::class, "post_registration"])->middleware("auth");

Route::get("/logout", [Authentication::class, "logout"])->middleware("auth");
Route::get("/wachtwoord-wijzigen", [Authentication::class, "change_password"])->middleware("auth");
Route::post("/post-wachtwoord-wijzigen", [Authentication::class, "post_change_password"])->middleware("auth");


// Statistics
Route::get("/statistieken/kanalen", [Statistics::class, "channels"])->middleware("auth");


// Bot settings
Route::get("/instellingen/log", [Bot_settings::class, "log"])->middleware("auth");
Route::post("/post-instellingen-bot-log", [Bot_settings::class, "post_log"])->middleware("auth");

Route::get("/instellingen-bot-xp", [Bot_settings::class, "xp"])->middleware("auth");
Route::post("/post-instellingen-bot-xp", [Bot_settings::class, "post_xp"])->middleware("auth");


// System
Route::get("/systeem/logs", [System::class, "system_logs"]);