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

route::get('/deconnexion','Auth\LogoutController@auth')->name('admin.deconnexion');

Route::group(['middleware' => 'auth:admin'],function(){
    route::get('/dashboard','DashboardController@show')->name('admin.dashboard');

    route::group(['prefix' => 'employees' , 'namespace' => 'Employees'],function(){
        route::get('/','IndexController@show')->name('admin.employees');
        route::get('/create','CreateController@show')->name('admin.employees.create');
        route::post('/create','CreateController@create');
        route::get('/{id}/suspendre','StatusController@suspendre')->name('admin.employees.suspendre');
        route::get('/{id}/valider','StatusController@valider')->name('admin.employees.valider');
        route::get('/{id}/supprimer','DeleteController@supprimer')->name('admin.employees.supprimer');
    });
    route::group(['prefix' => 'maintenances' , 'namespace' => 'Maintenances'],function(){

        route::get('/','IndexController@show')->name('admin.maintenances');
        route::get('/create','CreateController@show')->name('admin.maintenances.create');
        route::post('/create','CreateController@create');
        route::get('/{id}/suspendre','StatusController@suspendre')->name('admin.maintenances.suspendre');
        route::get('/{id}/valider','StatusController@valider')->name('admin.maintenances.valider');


    });

});