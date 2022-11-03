<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Autentikasi\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/templating", function () {
    return view("/templating");
});

Route::group(["middleware" => ["guest"]], function () {
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
});


Route::group(["middleware" => ["autentikasi"]], function () {
    Route::get("/logout", [LoginController::class, "logout"]);

    Route::get("admin/dashboard", [AppController::class, "dashboard_admin"]);
    Route::get("kepala_puskesmas/dashboard", [AppController::class, "dashboard_puskesmas"]);
    Route::get("kepala_kecamatan/dashboard", [AppController::class, "dashboard_kecamatan"]);
    Route::get("kepala_desa/dashboard", [AppController::class, "dashboard_desa"]);
    Route::get("bidan/dashboard", [AppController::class, "dashboard_bidan"]);
});
