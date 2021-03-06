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

Route::group([
    'middleware' => ['auth:api'],
    'namespace' => 'api',
    'as' => 'api.',
], function () {
    Route::get('boards/index', 'LinkBoardController@index');
    Route::get('boards/show', 'LinkBoardController@show');
    Route::delete('boards/delete', 'LinkBoardController@delete');

    Route::post('settings/store', 'SettingsController@store');
    Route::post('settings/store_pictures', 'SettingsController@store_pictures');
    Route::get('settings/show', 'SettingsController@show');

});
