<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

/*

    Frontend Starts

*/

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Route::get('/frontend-products', [FrontendController::class, 'products'])->name('frontend.products');
Route::get('/frontend-products/{product}', [FrontendController::class, 'productDetails'])->name('frontend.products.details');

Route::get('/categories/{category}/products/', [FrontendController::class, 'categoryProduct'])->name('frontend.categories.products');

Route::get('/cart',[FrontendController::class, 'getCart'])->name('frontend.cart');
Route::get('/cart/products/{product}',[FrontendController::class, 'addToCart'])->name('frontend.add_to_cart');
Route::delete('/cart/{cart}',[FrontendController::class, 'deleteCartItem'])->name('frontend.delete_cart_item');
Route::patch('/cart/{cart}',[FrontendController::class, 'updateCartItem'])->name('frontend.update_cart_item');

Route::get('/checkout', [FrontendController::class, 'checkOut'])->name('frontend.checkout');
Route::post('/place-order', [FrontendController::class, 'placeOrder'])->name('frontend.place_order');


Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/product_details', function () {
    return view('frontend.productDetails');
});



Route::get('/thank_you', function () {
    return view('frontend.thankYou');
});

Route::get('/profile_details', function () {
    return view('frontend.profile_details');
});

Route::get('/profile_update', function () {
    return view('frontend.profile_update');
});

//frontend end

/*

    Backend Starts

*/

// Route::get('/login', function () {
//     return view('auth_temp.login');
// });

Route::get('/dashboard', function () {
    return view('components.backend.index');
});

//brand
Route::prefix('brands')->group(function(){
    Route::get('/trash',[BrandController::class, 'trash'])->name('brands.trash');
    Route::get('/{id}/restore',[BrandController::class, 'restore'])->name('brands.restore');
    Route::delete('/{id}/delete',[BrandController::class, 'delete'])->name('brands.delete');

    Route::get('/index',[BrandController::class, 'index'])->name('brands.index');
    Route::get('/create',[BrandController::class, 'create'])->name('brands.create');
    Route::post('/store',[BrandController::class, 'store'])->name('brands.store');
    Route::get('/{id}/show',[BrandController::class, 'show'])->name('brands.show');
    Route::get('/{id}/edit',[BrandController::class, 'edit'])->name('brands.edit');
    Route::patch('/{id}/update',[BrandController::class, 'update'])->name('brands.update');
    Route::delete('/{id}/destroy',[BrandController::class, 'destroy'])->name('brands.destroy');
});

//category
Route::prefix('categories')->group(function()
{
    Route::get('/trash',[CategoryController::class, 'trash'])->name('categories.trash');
    Route::get('/{id}/restore',[CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('/{id}/delete',[CategoryController::class, 'delete'])->name('categories.delete');

    Route::get('/index',[CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create',[CategoryController::class, 'create'])->name('categories.create');
    Route::post('/store',[CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{id}/show',[CategoryController::class, 'show'])->name('categories.show');
    Route::get('/{id}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
    Route::patch('/{id}/update',[CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{id}/destroy',[CategoryController::class, 'destroy'])->name('categories.destroy');
});

//product
Route::prefix('products')->group(function()
{
    Route::get('/trash',[ProductController::class, 'trash'])->name('products.trash');
    Route::get('/{id}/restore',[ProductController::class, 'restore'])->name('products.restore');
    Route::delete('/{id}/delete',[ProductController::class, 'delete'])->name('products.delete');

    Route::get('/index',[ProductController::class, 'index'])->name('products.index');
    Route::get('/create',[ProductController::class, 'create'])->name('products.create');
    Route::post('/store',[ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}/show',[ProductController::class, 'show'])->name('products.show');
    Route::get('/{id}/edit',[ProductController::class, 'edit'])->name('products.edit');
    Route::patch('/{id}/update',[ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}/destroy',[ProductController::class, 'destroy'])->name('products.destroy');
});

// user
Route::prefix('users')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/change-role', [UserController::class, 'changeRole'])->name('users.change_role');
    Route::patch('/{user}/change-role', [UserController::class, 'updateRole'])->name('users.update_role');
});

//order
Route::prefix('orders')->group(function()
{
    // Route::get('/trash',[ProductController::class, 'trash'])->name('products.trash');
    // Route::get('/{id}/restore',[ProductController::class, 'restore'])->name('products.restore');
    // Route::delete('/{id}/delete',[ProductController::class, 'delete'])->name('products.delete');

    Route::get('/index',[OrderController::class, 'index'])->name('orders.index');
    // Route::get('/create',[ProductController::class, 'create'])->name('products.create');
    // Route::post('/store',[ProductController::class, 'store'])->name('products.store');
    Route::get('/{order}/show',[OrderController::class, 'show'])->name('orders.show');
    // Route::get('/{id}/edit',[ProductController::class, 'edit'])->name('products.edit');
    // Route::patch('/{id}/update',[ProductController::class, 'update'])->name('products.update');
    // Route::delete('/{id}/destroy',[ProductController::class, 'destroy'])->name('products.destroy');
});

//delivery
Route::get('/delivery', function () {
    return view('backend.delivery.index');
});
Route::get('/delivery/create', function () {
    return view('backend.delivery.create');
});
