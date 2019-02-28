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
Route::prefix('admin')->group(function(){

    Route::resources([

        'posts' =>'PostController',
    'category' => 'CategoryControler'
    ]);
    
    // Route::get('search','PostController');
    // Route::resource('posts','PostController');
    // Route::resource('category','CategoryControler');

//     Route::get('posts','Postcontroller@index')->name('posts.index');
// Route::get('posts/create','Postcontroller@create')->name('posts.create');
// Route::post('posts/store','Postcontroller@store')->name('posts.store');
// Route::get('posts/{post}/edit','Postcontroller@edit')->name('posts.edit');
// Route::put('posts/{post}','Postcontroller@update')->name('posts.update');
// Route::delete('posts/{post}','Postcontroller@destroy')->name('posts.destroy');

});


