<?php

use App\Http\Controllers\BotSettingsController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\SystemController;

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
Route::get("/", [HomepageController::class, "home"])->middleware("auth");


// Authentication
Route::get("/login", [AuthenticationController::class, "login"])->name("login");
Route::post("/postlogin", [AuthenticationController::class, "post_login"]);

Route::get("/registreer", [AuthenticationController::class, "register"])->middleware("auth");
Route::post("/post_registreer", [AuthenticationController::class, "post_registration"])->middleware("auth");

Route::get("/logout", [AuthenticationController::class, "logout"])->middleware("auth");
Route::get("/wachtwoord-wijzigen", [AuthenticationController::class, "change_password"])->middleware("auth");
Route::post("/post-wachtwoord-wijzigen", [AuthenticationController::class, "post_change_password"])->middleware("auth");


// Statistics
Route::get("/statistieken/kanalen", [StatisticController::class, "channels"])->middleware("auth");


// Bot settings
Route::get("/instellingen/log", [BotSettingsController::class, "log"])->middleware("auth");
Route::post("/post-instellingen-bot-log", [BotSettingsController::class, "post_log"])->middleware("auth");

Route::get("/instellingen-bot-xp", [BotSettingsController::class, "xp"])->middleware("auth");
Route::post("/post-instellingen-bot-xp", [BotSettingsController::class, "post_xp"])->middleware("auth");


// System
Route::get("/systeem/logs", [SystemController::class, "system_logs"]);