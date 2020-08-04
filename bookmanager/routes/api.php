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

Route::post('addbook', 'BookManagerController@store');
// Route::get('getbooks', 'BookManagerController@index');
Route::get('getbook/{id}', 'BookManagerController@show');
// Route::put('updatebook/{id}', 'BookManagerController@update');
Route::delete('deletebook/{id}', 'BookManagerController@destroy');

Route::post('addauthor', 'AuthorController@store');