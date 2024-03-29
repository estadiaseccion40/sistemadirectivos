<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscuelaController;
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

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/directores', function(){

        return view('directores.index');
    })->name('directores.index');

    Route::get('/escuelas',[EscuelaController::class,'index'])
        ->name('escuelas.index');

    Route::get('/escuelas/create',[EscuelaController::class,'create'] )
        ->name('escuelas.create');

    Route::post('/escuelas', [EscuelaController::class,'store'])
        ->name('escuelas.store');

    Route::get('/cotejadores', function(){
        return view('cotejadores.index');
    })->name('cotejadores.index');

});

require __DIR__.'/auth.php';
