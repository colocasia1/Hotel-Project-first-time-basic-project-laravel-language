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

//register
Route::get('register','Auth\RegisterController@show');
Route::post('register','Auth\RegisterController@register');

//Logout
Route::get('logout','Auth\LoginController@logout');

//Login
Route::get('/','Auth\LoginController@show');
Route::post('/','Auth\LoginController@login');


//home
Route::get('/','Viewer\ViewerController@index');

//service
Route::get('services','Viewer\BookingController@index');
Route::get('services/{id}','Viewer\BookingController@destroy');

//Booking
Route::get('booking/{id}/create','Viewer\BookingController@create');
Route::post('booking/{id}/create','Viewer\BookingController@store');

//restaurant
Route::get('restaurant','Viewer\RestaurantController@index');
Route::get('restaurant/{id}/food','Viewer\RestaurantController@show');

//about
Route::get('about','Viewer\ViewerController@about');

Route::group(array('prefix'=>'admin','namespace'=>'admin','middleware'=>'Admin'),function (){
    Route::get('/','AdminController@index');//Admin Panel Page

    Route::get('user','AdminUserController@index');//admin name and email info
    Route::get('user/{id}/edit','AdminUserController@edit');//admin rank edit
    Route::post('user/{id}/edit','AdminUserController@update');//admin rank update

    Route::get('roles','RolesController@index');//view all role
    Route::get('roles/create','RolesController@create');//role create from
    Route::post('roles/create','RolesController@store');//store to database

    //home create page
    Route::get('home/create','HomeController@create');//home create form
    Route::post('home/create','HomeController@store');//home post create into store database

    Route::get('home/carosal','HomeCarosalController@create');
    Route::post('home/carosal','HomeCarosalController@store');

    //Service create page
    Route::get('service/create','ServiceController@create');//service create
    Route::post('service/create','ServiceController@store');//service insert into database
    Route::get('on_trash_service','ServiceController@show');//show Service trash post
    Route::get('on_trash_service/{id}/restore','ServiceController@restore');//service trash post data restore
    Route::get('on_trash_service/{id}/delete','ServiceController@forcedelete');

    Route::get('otherservice/create','OtherServiceController@create');//other service create
    Route::post('otherservice/create','OtherServiceController@store');//other service insert into database

    Route::get('upload','UploadController@create');//video upload form
    Route::post('upload','UploadController@store');//insert into database video

    //Booking request
    Route::get('booking/request','BookingController@index');//view all request booking
    Route::get('booking/request/{id}','BookingController@destroy');//use softdelete to go trash
    Route::get('on_trash','BookingController@show');//trash file show
    Route::get('on_trash/{id}/restore','BookingController@restore');//trash data restore
    Route::get('on_trash/{id}','BookingController@forcedelete');

    //Category
    Route::get('category/create','CategoryController@create');//category create and View all category
    Route::post('category/create','CategoryController@store');//category store into database

    //Restaurant
    Route::get('food/create','FoodController@create');
    Route::post('food/create','FoodController@store');
});



