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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'cadastro'], function(){	
	Route::post('/create', ['uses' => 'CadastroController@create']);
	Route::get('/getAll', ['uses' => 'CadastroController@getAll']);
	Route::get('/getById/{id}', ['uses' => 'CadastroController@getById']);
});	
