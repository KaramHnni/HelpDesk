<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

route::get('/connexion','Auth\ConnexionController@show')->name('admin.login');
route::post('/connexion','Auth\ConnexionController@auth');

route::group(['middelware' =>'auth:admin'],function(){

    route::get('/dashboard','DashboardController@show')->name('admin.dashboard');
});