<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PackageBankController;
use Illuminate\Routing\Route as RoutingRoute;
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
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/register',[AuthController::class,'show'])->name('register');
Route::post('/register',[AuthController::class,'store']);




Route::middleware(['auth'])->group(function(){


    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    // admin
    Route::prefix('dashboard')->name('admin.')->group(function(){
        Route::middleware(['can:manage categories'])->group(function(){
            
            Route::resource('category', CategoryController::class);
        });
        Route::middleware(['can:manage packages'])->group(function(){

            Route::resource('book', BookController::class);
        });
        Route::middleware(['can:manage package banks'])->group(function(){

            Route::resource('bank', PackageBankController::class);
        });
    });

   

    // Route::prefix('dashboard')->name('dashboard.')->group(function(){
    //     Route::middleware('can:view order')->group(function(){

            

    //     });
    // });

});



