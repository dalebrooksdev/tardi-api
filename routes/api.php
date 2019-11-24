<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function(){
    return 'Woohoo!';
});

Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::middleware('auth:api')->post('/logout', 'AuthController@logout');

Route::get('/classrooms', 'ClassroomController@index')->name('classrooms.index');
Route::post('/classrooms', 'ClassroomController@store')->name('classrooms.store');
Route::get('/classrooms/{classroom}', 'ClassroomController@show')->name('classrooms.show');
Route::delete('/classrooms/{classroom}', 'ClassroomController@destroy')->name('classrooms.destroy');

Route::get('/classrooms/{classroom}/attendees', 'AttendeeController@index')->name('attendees.index');
Route::get('/classrooms/{classroom}/attendees/{attendee}/timepunches', 'TimepunchController@index')->name('timepunches.index');

