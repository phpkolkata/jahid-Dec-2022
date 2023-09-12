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

Route::get('/', function () {
    return view('welcome');
    // return "welcome";
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/pages/page1', function () {
    // return view('pages/page1');
    return view('pages.page1');
});

Route::get('/pages/page2', function () {
    // return view('pages/page1');
    return view('pages.page2');
});
