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


Route::get('sinhvien', 'SinhVienController@index');
Route::get('sinhvien/{id}', 'SinhVienController@show');
Route::post('sinhvien', 'SinhVienController@store');
Route::put('sinhvien/{id}', 'SinhVienController@update');
Route::delete('sinhvien/{id}', 'SinhVienController@destroy');