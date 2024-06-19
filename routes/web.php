<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\CheckOutController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ShopWatchController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WatchController;


Route::get("/product",function(){
    return view("frontEndProject.page.product");
});

Route::middleware("auth:admin")->group(function() {
    Route::get('/admin', function() {
        return view('admin.index');
    })->name('admin');

    Route::get("/admin/watch",[WatchController::class,"index"])->name("watch.index");
    Route::get("/admin/watch/create",[WatchController::class,"create"])->name("watch.create");
    Route::get("/admin/watch/{id}/show",[WatchController::class,"show"])->name("watch.show");
    Route::get("/admin/watch/{id}/edit",[WatchController::class,"edit"])->name("watch.edit");
    Route::post("/admin/watch",[WatchController::class,"store"])->name("watch.store");
    Route::put("/admin/watch/{id}",[WatchController::class,"update"])->name("watch.update");
    Route::delete("/admin/watch/{id}",[WatchController::class,"destroy"])->name("watch.destroy");


    Route::get("/admin/order",[OrderController::class,"index"])->name("order.index");
    Route::post("/admin/order",[OrderController::class,"date"])->name("order.date");
    Route::get("/admin/order/show/{userId}/{date}",[OrderController::class,"customer"])->name("order.show");
    Route::get("/admin/order/view/{userId}/{date}",[OrderController::class,"order"])->name("order.view");
    Route::get("/admin/order/view/product/{userId}/{date}",[OrderController::class,"product"])->name("order.view.product");
    Route::get("/admin/order/show/{id}",[OrderController::class,"showProduct"])->name("order.view.product.show");

});


Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.login.authenticate');
Route::post("/admin/logout",[AdminController::class,"logout"])->name("admin.logout");
Route::get('/admin/register', [AdminController::class, 'create'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'store'])->name('admin.register.store');


Route::get("/",[ShopWatchController::class,"index"])->name("shop.index");
Route::get("/order",[ShopWatchController::class,"order"])->name("shop.order");
Route::get("/order/product/{date}",[ShopWatchController::class,"productHistory"])->name("shop.order.product");
Route::get("/watch/{id}",[ShopWatchController::class,"show"])->name("shop.show");
Route::get("/type/{type}",[ShopWatchController::class,"type"])->name("shop.type");
Route::get("/brand/{brand}",[ShopWatchController::class,"brand"])->name("shop.brand");
Route::get("/brand/{brand}/{type}",[ShopWatchController::class,"typeBrand"])->name("shop.typeBrand");

Route::get("/cart",[CartController::class,"index"])->name("cart.index");
Route::get("/cart/{watchId}",[CartController::class,"create"])->name("cart.create");
Route::get('/cart/remove/{watchId}',[CartController::class,"remove"])->name("cart.remove");

Route::get("/checkout",[CheckOutController::class,"index"])->name("checkout.index");
Route::post('/checkout', [CheckOutController::class,"create"])->name("checkout.create");




require __DIR__.'/auth.php';
