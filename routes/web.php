<?php
// routes/web.php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutUs;


use App\Http\Controllers\CheckoutController;


use App\Http\Controllers\MyAccountController;


use App\Http\Controllers\OrderController;
// routes/web.php

use App\Http\Controllers\ContactController;
// routes/web.php

use App\Http\Controllers\BlogController;


use App\Http\Controllers\SearchController;

// routes/web.php

use App\Http\Controllers\ThankYouController;

Route::get('/thankyou', [ThankYouController::class, 'index'])->name('thankyou.index');




Route::get('/search', [SearchController::class, 'index'])->name('search');



Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');


Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');


Route::get('/order', [OrderController::class, 'index'])->name('order.index');


Route::get('/myaccount', [MyAccountController::class, 'index'])->name('myaccount.index');


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

Route::get('/about-us', [aboutUs::class, 'aboutUs'])->name('aboutUs.index');

Route::get('/wishlist',[WishlistController::class,'getWishlistedProducts'])->name('wishlist.list');

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/product/{slug}', [ShopController::class, 'productDetails'])->name('shop.product.details'); // Corrected method name

Route::delete('/cart/remove', [CartController::class, 'removeCart'])->name('cart.remove');

Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::delete('/cart/remove', [CartController::class, 'removeCart'])->name('cart.remove');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');

Auth::routes();

Route::middleware('auth')->group(function () {
    route::get('/my account', [UserController::class, 'index'])->name('user.index');
});

Route::middleware(['auth', 'auth.admin'])->group(function () {
    route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
?>

