<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandProduct;

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/trangchu', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('lienhe');
});

Route::get('/news','App\Http\Controllers\NewsController@index');
Route::get('/chuonchuon','App\Http\Controllers\NewsController@index');

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');


// day là phan rout backend


Route::get('/login', [AdminController::class, 'index'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::get('/admin','App\Http\Controllers\AdminController@index');

Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

Route::get('/admin-dashboard', function() {
    return redirect('/admin');
});

Route::get('/dashboard', [AdminController::class, 'showdashboard']);
   
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/admin', [AdminController::class, 'index']);

//Category Product
Route::get('/add-category-product', [CategoryController::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryController::class, 'all_category_product']);
Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

//Brand Product
Route::get('/add-brand-product', [BrandProduct::class, 'add_brand_product']);
Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product']);
Route::post('/save-brand-product', [BrandProduct::class, 'save_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}',[BrandProduct::class,'delete_brand_product']);
// ...other routes that require authentication...
