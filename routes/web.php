<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Autentikasi\LoginController;
use App\Http\Controllers\Admin\Akun\BidanController;
use App\Http\Controllers\Admin\Akun\PasienController;
use App\Http\Controllers\Admin\Pertanyaan\PertanyaanController;
use App\Http\Controllers\Bidan\Perawatan\KeluhanController;
use App\Http\Controllers\LandingPageController;
use App\Models\Akun\Bidan;
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

Route::get('/', [LandingPageController::class, "index"]); //"index" itu nama method yang dimana diambil dari function di controllernya
// Route::get('/bidan/keluhan/keluhan',[KeluhanController::class, "data_keluhan"]);

// Route::get('/admin/pertanyaan/pertanyaan',[PertanyaanController::class,"index"]);


Route::get("/templating", function () {
    return view("/templating");
});

Route::group(["middleware" => ["guest"]], function () {
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
});


Route::group(["middleware" => ["autentikasi"]], function () {
    Route::group(["middleware"=>["can:admin"]], function () {
        //admin
        Route::prefix("admin")->group(function () {
            Route::get("/pertanyaan/pertanyaan",[PertanyaanController::class,"index"]);
            Route::get("/dashboard", [AppController::class, "dashboard_admin"]);
            
            Route::prefix("akun")->group(function () {    
                Route::resource("bidan",BidanController::class);
                Route::resource("pasien",PasienController::class);
            });
            // Route::get("/akun/bidan", [BidanController::class, "index"]);
            // Route::post("/akun/bidan/store",[BidanController::class, "store"]);
            // Route::put("/akun/bidan/{user_id}",[BidanController::class, "update"]);
            // Route::delete("/akun/bidan/{user_id}",[BidanController::class, "destroy"]);
        });
        
    });
    
    Route::get("/logout", [LoginController::class, "logout"]);
    
    Route::get("kepala_puskesmas/dashboard", [AppController::class, "dashboard_puskesmas"]);
    Route::get("kepala_kecamatan/dashboard", [AppController::class, "dashboard_kecamatan"]);
    Route::get("kepala_desa/dashboard", [AppController::class, "dashboard_desa"]);

    Route::prefix("bidan")->group(function(){
            Route::prefix("perawatan")->group(function(){
                Route::get("/pasien", [KeluhanController::class,"data_pasien"]);  //data_pasien diambil dari class di controller keluhan
            });
        Route::get("dashboard", [AppController::class, "dashboard_bidan"]);
        
    });

    Route::get("pasien/dashboard", [AppController::class, "dashboard_pasien"]);
});
