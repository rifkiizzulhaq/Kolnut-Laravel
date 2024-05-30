<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\Rekomedasi_makanan_controller;
use App\Http\Controllers\API\Rekomendasi_makanan_ApiController;
use App\Http\Controllers\API\Scan;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TipsMakananController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/detailuserlogin', function (Request $request) {
        return $request->user();
    });
    Route::get("/datauser",[UserController::class,"index"]);
    Route::delete("/deleteuser/{id}",[LoginController::class,"delete"]);
    Route::get("/logout",[LoginController::class,"logout"]);

    Route::get('/tips-makanan', [Rekomendasi_makanan_ApiController::class, 'getTipsMakanan']);
    Route::get('/tips-makanan/{id}', [Rekomendasi_makanan_ApiController::class, 'getTipsMakananById']);

});


Route::get('/data',[Rekomedasi_makanan_controller::class, 'index']);
Route::post('/scan', [Scan::class, 'sendFile']);


