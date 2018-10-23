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
if(config('app.env') === 'production'){
    URL::forceScheme('https');
}

Route::get('/','CalendarController@index');

Route::group(['middleware' => 'auth'], function() {
Route::get('/holiday','CalendarController@getHoliday');
Route::post('/holiday','CalendarController@postHoliday');
Route::get('/holiday/{id}','CalendarController@getHolidayId');
Route::delete('/holiday','CalendarController@deleteHoliday');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
