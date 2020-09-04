<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', ['as' => 'Home', 'uses' => 'admin\DashBoardController@home']);
Route::get('login', ['as' => 'login', 'uses' => 'admin\DashBoardController@login']);
Route::get('register', ['as' => 'register', 'uses' => 'admin\DashBoardController@register']);
Route::get('auth', ['as' => 'auth', 'uses' => 'admin\DashBoardController@auth']);
Route::post('check-login', ['as' => 'Checklogin', 'uses' => 'admin\DashBoardController@Check_login']);

Route::group(['as'=>'admin::','prefix'=>'admin/backend/','middleware' => ['auth']], function () {
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'admin\DashBoardController@dashboard']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'admin\DashBoardController@logout']);

    Route::get('/all-slider',['as' => 'allSlider',  'uses' => 'admin\SliderController@allSlider']);
    Route::get('/add-slider',['as' => 'addSlider',  'uses' => 'admin\SliderController@addSlider']);
    Route::post('/save-slider',['as' => 'saveSlider',  'uses' => 'admin\SliderController@saveSlider']);
    Route::get('/edit/{id}',['as' => 'editSlider', 'uses' => 'admin\SliderController@editSlider']);
    Route::post('update/{id}',['as' => 'updateSlider',  'uses' => 'admin\SliderController@updateSlider']);
    Route::get('delete/{id}',['as' => 'deleteSlider',  'uses' => 'admin\SliderController@deleteSlider']);

});
