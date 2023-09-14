<?php

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
