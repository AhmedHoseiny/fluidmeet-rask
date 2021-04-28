<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('pharmacy')->middleware('auth:api')->group(function () {
    Route::get('', 'PharmacyController@index');
    Route::post('', 'PharmacyController@create');
    Route::get('{id}', 'PharmacyController@show');
    Route::put('{id}', 'PharmacyController@update');
    Route::delete('{id}', 'PharmacyController@delete');
});
