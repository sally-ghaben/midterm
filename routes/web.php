<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
Use App\Http\Controllers\ProductController;
use App\Models\Product;

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

Route::get('/',[ProductController::class, 'index']);
Route::get('add-product',[ProductController::class, 'add']);
Route::post('store',[ProductController::class, 'store']);
Route::get('delete/{id}',[ProductController::class, 'destroy']);
Route::get('edit/{id}',[ProductController::class, 'edit']);
Route::put('update/{id}',[ProductController::class, 'update']);