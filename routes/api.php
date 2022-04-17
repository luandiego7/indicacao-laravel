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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function(){
    return response()->json('pong');
});

Route::get('users', function(){
    return \App\Models\User::all();
});

Route::group(['prefix' => 'auth'], function(){
    Route::post('/login', 'Api\Auth\AuthController@login');
    Route::post('/register', 'Api\Auth\RegisterController@register');
    Route::post('/logout', 'Api\Auth\AuthController@logout')->middleware('auth:api');
});

Route::group(['middleware' => ['auth:api']], function(){
    Route::get('/indications', 'Api\IndicationController@indications');
    Route::post('/indications/store', 'Api\IndicationController@store');
    Route::post('/indications/check-cpf', 'Api\IndicationController@checkCPF');
    Route::delete('/indications/delete/{id}', 'Api\IndicationController@delete');
    Route::put('/indications/in-process/{id}', 'Api\IndicationController@inProcess');
    Route::put('/indications/finish/{id}', 'Api\IndicationController@finish');
});
