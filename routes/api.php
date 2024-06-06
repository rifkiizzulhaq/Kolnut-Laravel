<?php

use App\Http\Controllers\AiRekomendasiController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\Rekomedasi_makanan_controller;
use App\Http\Controllers\API\Scan;
use App\Http\Controllers\API\TipsMakananApiController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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

    Route::get('/artikel', [TipsMakananApiController::class, 'Riwayat']);

    Route::get('/ai-makanan', [AiRekomendasiController::class, 'index']);

});


// Route::get('/data',[Rekomedasi_makanan_controller::class, 'index']);
Route::post('/scan', [Scan::class, 'sendFile']);


