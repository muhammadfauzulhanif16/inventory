<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
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
})->middleware("guest");

Route::get('/register', [AuthController::class, "register_index"])->name("register")->middleware("guest");
Route::post('/register', [AuthController::class, "register"]);

Route::get('/login', [AuthController::class, "login_index"])->name('login')->middleware("guest");
Route::post('/login', [AuthController::class, "login"]);

Route::post('/logout', [AuthController::class, "logout"]);

Route::get('/dashboard', function () {
    return view('components.pages.app.dashboard');
})->name("dashboard.get")->middleware("auth");

//Route::get('/products', [ProductController::class, "index"])->name("products.get")->middleware("auth");
//Route::get('/products/create', [ProductController::class, "create"])->name("product.post")->middleware("auth");
//Route::post('/products/create', [ProductController::class, "incoming_product_store"]);
Route::resource('/products', ProductController::class)->middleware("auth");

//Route::get('/categories', [CategoryController::class, "index"])->name("categories.get")->middleware("auth");
//Route::get('/categories/add', [CategoryController::class, "create"])->name("categories.post")->middleware("auth");
//Route::post('/categories/add', [CategoryController::class, "store"]);
Route::resource('/categories', CategoryController::class)->middleware("auth");

//Route::get('/units', [UnitController::class, "index"])->name("units.get")->middleware("auth");
//Route::get('/units/add', [UnitController::class, "create"])->name("units.post")->middleware("auth");
//Route::post('/units/add', [UnitController::class, "store"]);
Route::resource('/units', UnitController::class)->middleware("auth");

//Route::get('/suppliers', [SupplierController::class, "index"])->name("suppliers.create")->middleware("auth");
//Route::get('/suppliers/add', [SupplierController::class, "create"])->name("suppliers.post")->middleware("auth");
//Route::post('/suppliers/add', [SupplierController::class, "store"]);
Route::resource("/suppliers", SupplierController::class)->middleware("auth");

//Route::get('/transactions', [TransactionController::class, "index"])->name("transactions.get")->middleware("auth");
//Route::get('/transactions/add', [TransactionController::class, "create"])->name("transaction.post")->middleware("auth");
//Route::post('/transactions/add', [TransactionController::class, "store"]);
Route::resource("/transactions", TransactionController::class)->middleware("auth");


//Route::get('/employees', [EmployeeController::class, "index"])->name("employees.get")->middleware("auth");
//Route::get('/employee/add', [EmployeeController::class, "create"])->name("employee.post")->middleware("auth");
//Route::post('/employee/add', [EmployeeController::class, "store"]);
Route::resource("/employees", EmployeeController::class)->middleware("auth");

Route::post("/report", [ReportController::class, "store"]);
