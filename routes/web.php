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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/','IndexController@index');
Route::match(['get','post'],'/about','IndexController@aboutPage');


Route::match(['get','post'],'/admin','AdminController@login');

Route::group(['middleware'=>['auth']],function()
{
	Route::match(['get','post'],'/admin/dashboard','AdminController@dashboard');

	// Admin Profile Route
	Route::match(['get','post'],'/admin/profile','ProfileController@profile');
	Route::match(['get','post'],'/admin/profile/{id}','ProfileController@profile');
	
	//Blog Route
	Route::match(['get','post'],'/admin/add-blog','BlogController@addBlog');
	Route::match(['get','post'],'/admin/view-blogs','BlogController@viewBlogs');
	Route::match(['get','post'],'/admin/edit-blog/{id}','BlogController@editBlog');
	Route::match(['get','post'],'/admin/delete-blog/{id}','BlogController@deleteBlog');
	Route::post('/admin/update-blog-status','BlogController@updateStatus');

});
Route::get('/logout','AdminController@logout');





