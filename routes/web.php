<?php

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

route::get('/connexion','Site\Auth\ConnexionController@show')->name('login');
route::post('/connexion','Site\Auth\ConnexionController@auth');

route::get('/deconnexion','Site\Auth\LogoutController@logout')->name('logout');
