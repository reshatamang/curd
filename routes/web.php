<?php

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
// front end

Route::get('/', function () {
    return view('fronts.pages.index');
    // return view('fronts.layouts.master');
});

// Back end

Route::get('/admin',function(){
    return view('back.dashboard');
    // return view('back.layouts.master');
});