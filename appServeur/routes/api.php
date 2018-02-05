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

Route::namespace('Api')->group(function() {
});

Route::namespace('Api')->group(function() {
    Route::resource('guide', 'GuideController', ['except' => ['create', 'edit', 'store', 'update', 'destroy']]);
    Route::resource('place', 'PlaceController', ['except' => ['create', 'edit', 'store', 'update', 'destroy']]);
    Route::resource('categories', 'CategoryController', ['except' => ['create', 'edit', 'store', 'update', 'destroy']]);
    Route::resource('service', 'ServiceController', ['except' => ['create', 'edit', 'store', 'update', 'destroy']]);
    Route::get('/services', 'ServiceController@showWithCoords');
});


