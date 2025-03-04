<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'show'])->name('register');
Route::post('/register',[AuthController::class,'store']);

Route::middleware(['auth'])->group(function(){


    Route::get('/dashboard',[DashboardController::class,'index']);

    // Route::prefix('dashboard')->name('dashboard.')->group(function(){
    //     Route::middleware('can:view order')->group(function(){

            

    //     });
    // });


    // admin
    Route::prefix('admin')->name('admin.')->group(function(){
        
        Route::middleware('can:manage categories')->group(function(){
            Route::resource('categories',  CategoryController::class);
        });
       
    });
});



