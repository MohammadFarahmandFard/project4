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
Route::get('/',function(){
	return view('home_page');
});

Route::get('/mob',function(){
	return view('mobile');
});
Route::get('/shop','ProductController@shop');

Route::get('/reg',function(){
	return view('register');
});
Route::get('/login',function(){
	return view('login');
});
Route::get('/book','BookController@book_form');
Route::post('/save_book','BookController@save');
Route::get('/book_show','BookController@show');	
//route register and login
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','HomeController@admin');
Route::get('/logout','Auth\LoginController@logout');
Route::get('/delete/{id}','BookController@delete');
Route::get('/update1/{id}','BookController@update1');
Route::post('/update2/{id}','BookController@update2');
Route::get('/news','EventController@news');
Route::get('/add_new','EventController@add_new');
Route::post('/enter_news','EventController@enternews');
Route::get('/complete/{id}','EventController@show_com');
Route::get('/add_pro','ProductController@add_pro');
Route::post('/send_pro','ProductController@save_pro');
Route::get('/com','CommentController@com_page');
Route::post('/sen_com','CommentController@com_save');