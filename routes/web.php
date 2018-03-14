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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('/contact', 'ContactController@store')->name('contact.sendMessage');
Route::get('/admin/contact', 'ContactController@index')->name('contact.index');
Route::get('/admin/contact/{id}','ContactController@show')->name('contact.show');
Route::get('/admin/contact/{id}','ContactController@edit')->name('contact.edit');
Route::delete('/admin/contact/{id}','ContactController@destroy')->name('contact.delete');
Route::Put('/admin/contact/{id}','ContactController@update')->name('contact.update');
Route::post('/reservation','ReservationController@store')->name('reservation.store');
Route::get('/admin/reservation','ReservationController@index')->name('reservation.index');
Route::get('/admin/reservation/{id}','ReservationController@confirm')->name('reservation.confirm');
Route::delete('/admin/reservation/{id}','ReservationController@destroy')->name('reservation.destroy');
Auth::routes();

//Route::get('/admin/dashboard', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function () {
    Route::get('dashboard', 'dashboardController@index')->name('admin.dashboard');
    Route::resource('slider', 'SliderController');
    Route::resource('category', 'CategoryController');
    Route::resource('item', 'ItemController');
    

});
Route::get('logOut', function () {

	    auth::logOut();
        return Redirect::to('');

		})->middleware("auth");

