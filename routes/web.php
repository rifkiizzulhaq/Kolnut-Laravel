<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdminController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified']], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::middleware(['auth','role:admin'])->group(function(){
                Route::get('/tips-makanan', [AdminController::class, 'tipsMakanan'])->name('tips-makanan');
                Route::get('/tips-makanan-create', [AdminController::class, 'tipsMakananCreate'])->name('tips-makanan.create');
                Route::post('/tips-makanan-create', [AdminController::class, 'tipsMakananStore'])->name('tips-makanan.store');
                Route::get('/tips-makanan-edit/{id}', [AdminController::class, 'tipsMakananEdit'])->name('tips-makanan.edit');
                Route::put('/tips-makanan-edit/{id}', [AdminController::class, 'tipsMakananUpdate'])->name('tips-makanan.update');
                Route::delete('/tips-makanan-delete/{id}', [AdminController::class, 'tipsMakananDelete'])->name('tips-makanan.delete');
        });
});

require __DIR__.'/auth.php';
