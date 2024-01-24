<?php

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


// use App\Http\Controllers\PageController;
// Route::get('/',[PageController::class,'index']);
// Route::get('/about',[PageController::class,'about']);
// Route::get('/articles/{id}',[PageController::class,'articles']);

use App\Http\Controllers\HomeController;
Route::get('/',[HomeController::class,'index']);

use App\Http\Controllers\AboutController;
Route::get('/about',[AboutController::class,'about']);

use App\Http\Controllers\ArticleController;
Route::get('/articles/{id}',[ArticleController::class,'articles']);

