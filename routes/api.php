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


Route::get('/branches','BranchesController@index');

Route::get('/branches/{branch}','BranchesController@show');

Route::delete('/branches/{branch}','BranchesController@destroy');

Route::put('/branches/{branch}','BranchesController@update');