<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
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

Route::get('/', function () {
    return view('components.pages.welcome');
});

Route::get('/register', [AuthController::class, "register_index"])->name("register.post");
Route::post('/register', [AuthController::class, "register_store"]);


Route::get('/login', [AuthController::class, "login_index"])->name('login.post');
Route::post('/login', [AuthController::class, "login_store"]);

Route::get('/dashboard', function () {
    return view('components.pages.app.dashboard');
})->name("dashboard.get");

Route::get('/products', function () {
    return view('components.pages.app.products');
})->name("products.get");

Route::get('/products', [ProductController::class, "index"])->name("products.get");
Route::get('/product/add', [ProductController::class, "create"])->name("product.post");
Route::post('/product/add', [ProductController::class, "store"]);

Route::get('/product/add', function () {
    return view('components.pages.app.product.create');
})->name("product.post");

Route::get('/categories', [CategoryController::class, "index"])->name("categories.get");
Route::get('/category/add', [CategoryController::class, "create"])->name("category.post");
Route::post('/category/add', [CategoryController::class, "store"]);

Route::get('/units', [UnitController::class, "index"])->name("units.get");
Route::get('/unit/add', [UnitController::class, "create"])->name("unit.post");
Route::post('/unit/add', [UnitController::class, "store"]);
