<?php

use App\Http\Controllers\backend\categorycontroller;
use App\Http\Controllers\backend\customercontroller;
use App\Http\Controllers\backend\productcontroller;
use App\Http\Controllers\backend\suppliercontroller;
use App\Http\Controllers\backend\usercontroller;
use App\Http\Controllers\frontend\giohangcontroller;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\ordercontroller;
use App\Http\Controllers\frontend\productdetail;
use App\Http\Controllers\frontend\blogcontroller;
use Illuminate\Support\Facades\Route;

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


Route::group([], function () {
    Route::get('/sendmail', [homecontroller::class, 'testmail'])->name('f.contact');
    Route::post('/sendmail', [homecontroller::class, 'sendmail'])->name('f.sendmail');

    Route::get('/',[homecontroller::class,'index'])->name('f.home');
    Route::get('/cart',[giohangcontroller::class,'index'])->name('cart.index');
    Route::post('/add-to-cart',[giohangcontroller::class,'addtocart'])->name('cart.add');
    Route::post('/update-cart',[giohangcontroller::class,'update'])->name('cart.update');
    Route::get('/delete-item-{id}',[giohangcontroller::class,'delitem'])->name('cart.del');
    Route::get('/translate',[ngonngu::class,'translate'])->name('translate.trans');

    Route::get('/productsing', [productdetail::class, 'index'])->name('pg.index');
    Route::post('/add-to-productsing', [productdetail::class, 'addtop'])->name('pg.add');

    Route::get('/checkout',[ordercontroller::class,'index'])->name('checkout.index');
    Route::post('/checkout',[ordercontroller::class,'submit'])->name('checkout.submit');
    Route::get('/completed',[ordercontroller::class,'done'])->name('checkout.done');

    Route::get('/blog', [blogcontroller::class, 'index'])->name('blog.index');

});

// Route admin panel
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login',[usercontroller::class,'login'])->name('b.login');
    Route::post('/login',[usercontroller::class,'loginPost'])->name('b.loginpost');
    // Route::get('/renpass',[usercontroller::class,'pass'])->name('b.pas');
//cac route se bi kiem tra dang nhap
    Route::group(['middleware' => 'backend.auth'], function () {
         Route::get('/renpass',[usercontroller::class,'pass'])->name('b.pas');
        Route::get('/logout',[usercontroller::class,'logout'])->name('b.logout');
        Route::resource('product',productcontroller::class);
        Route::resource('category',categorycontroller::class);
        Route::resource('user',usercontroller::class);
        Route::resource('order',ordercontroller::class);
        Route::resource('supplier',suppliercontroller::class);
        Route::resource('customer',customercontroller::class);
    });

});
