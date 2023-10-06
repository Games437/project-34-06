<?php

use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\Admin\Profile_userController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Product_typeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\MenuController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    //user
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
    
    //product type
    Route::get('/admin/product_type', [Product_typeController::class, 'index'])->name('admin.product_type');
    Route::get('/admin/product_type/create', [Product_typeController::class, 'createform'])->name('admin.product_type.create');
    Route::post('/admin/product_type/insert', [Product_typeController::class, 'insert'])->name('admin.product_type.insert');
    Route::get('/admin/product_type/edit/{id}', [Product_typeController::class, 'edit'])->name('admin.product_type.edit');
    Route::get('/admin/product_type/delete/{id}', [Product_typeController::class, 'delete'])->name('admin.product_type.delete');
    Route::post('/admin/product_type/update/{id}', [Product_typeController::class, 'update'])->name('admin.product_type.update');
    
    //product
    Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/admin/product/create', [ProductController::class, 'createform'])->name('admin.product.create');
    Route::post('/admin/product/insert', [ProductController::class, 'insert'])->name('admin.product.insert');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');
    Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
}); // End Group Admin Middleware

Route::get('/user/profile', [Profile_userController::class, 'index'])->name('user.profile');
Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

//menu
Route::get('/menu/menuCorndog',[MenuController::class, 'corndog'])->name('menu.corndog');
Route::get('/menu/menuPizza',[MenuController::class, 'pizza'])->name('menu.pizza');
Route::get('/menu/menuSticky',[MenuController::class, 'sticky'])->name('menu.sticky');
Route::get('/menu/menuPromotion',[MenuController::class, 'promotion'])->name('menu.promotion');

//about
Route::get('/about/shop',[AboutController::class, 'about'])->name('about.shop');