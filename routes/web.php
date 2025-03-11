<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PackageBankController;
use App\Http\Controllers\UserController;
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

Route::get('/about', [FrontController::class,'about'])->name('about');

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout'])->name('logout');



Route::get('/register',[AuthController::class,'show'])->name('register');
Route::post('/register',[AuthController::class,'store']);

Route::get('/kategori', [FrontController::class, 'category'])->name('front.category');
Route::get('/kategori/{category}', [FrontController::class, 'categoryDetail'])->name('front.category.detail');

Route::get('/produk', [FrontController::class, 'produk'])->name('front.produk');
Route::get('/produk/{book}', [FrontController::class, 'produkDetail'])->name('front.produk.detail');












Route::middleware(['auth'])->group(function(){


    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('dashboard/my-orders', [DashboardController::class,'myOrders'])->name('dashboard.myOrders');
    Route::get('dashboard/my-orders/{order}', [DashboardController::class,'myOrdersDetail'])->name('dashboard.myOrders.detail');



    Route::get('/cart', [CartController::class, 'show'])->name('frontend.cart');
    Route::post('/cart/{book}',[CartController::class, 'addToCart'])->name('frontend.cart.store');
    Route::delete('/cart/{id}', [CartController::class, 'deleteFromCart'])->name('frontend.cart.destroy');



    Route::middleware('can:checkout package')->group(function(){
        // customer menunggu sampai developer menerima parameter  || auth middleware
        Route::get('/payment/{book}', [FrontController::class, 'payment'])->name('front.payment');
        Route::post('/payment/save/{book}', [FrontController::class, 'paymentStore'])->name('front.payment.store');

        // ada parameter yaitu buku mana yang akan dibeli || auth middleware
        Route::get('/payment/choosebank/{bookOrder}', [FrontController::class, 'chooseBank'])->name('front.chooseBank');
        Route::patch('/payment/choosebank/save/{bookOrder}', [FrontController::class, 'chooseBankStore'])->name('front.chooseBank.store');

        // 
        Route::get('/payment/book/{bookOrder}', [FrontController::class, 'bookPayment'])->name('front.book_payment');
        Route::patch('/payment/book/{bookOrder}/save', [FrontController::class, 'bookPaymentStore'])->name('front.book_payment.store');

        Route::get('/book-finish', [FrontController::class, 'finish'])->name('front.finish');
    });

    // user
    Route::get('dashboard/users',[UserController::class,'index'])->name('dashboard.users.index');

    Route::get('dashboard/orders', [DashboardController::class,'orders'])->name('dashboard.orders');
    Route::get('dashboard/orders/{order}', [DashboardController::class,'ordersDetail'])->name('dashboard.orders.detail');
    Route::patch('dashboard/orders/{order}/save', [DashboardController::class,'update'])->name('dashboard.orders.update');

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
});



