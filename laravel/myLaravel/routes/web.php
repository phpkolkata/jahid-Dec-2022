<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
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
    // logic
    return view('welcome');
    // return "welcome";
});

Route::get('/test', function () {
    // logic
    return view('test');
});

Route::get('/pages/page1', [PageController::class, 'page1']);
Route::get('/pages/page2', [PageController::class, 'page2']);
Route::get('pages/page3', [PageController::class, 'page3']);
Route::get('pages/{age}/page3/', [PageController::class, 'page3']);

Route::get('/form/entry', [FormController::class, 'entry']);
Route::post('/form/submit', [FormController::class, 'submit'])->name('sb');

// Route::get('/cateory/')
// Route::get('/cateory/add')
// Route::get('/cateory/store')
// Route::get('/cateory/detail')
// Route::get('/cateory/edit/33')
// Route::get('/cateory/update/33')
// Route::get('/cateory/delete/33')

Route::resource('category', CategoryController::class);
