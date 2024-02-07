<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
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
    return view('welcome');
});

//Route::get('/list', function(){
//    return view('task'); 
//})->name('list');;

Route::get      ('/list',       [ListController::class, 'index'])   ->name('list');
Route::post     ('/list',       [ListController::class, 'store'])   ->name('list');
Route::delete   ('/list/{id}',  [ListController::class, 'destroy']) ->name('destroy');
Route::get      ('/list/{id}',  [ListController::class, 'edit'])    ->name('edit');
Route::patch    ('/list/{id}',  [ListController::class, 'update'])   ->name('update');

Route::get('/categories', [CategoriesController::class,'index'])->name('categories');
