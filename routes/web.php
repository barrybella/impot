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
Auth::routes();

Route::group(['middleware' => 'auth'], function (){

    /********* TABLEAU DE BORD ****************/
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');

    /********* UTILISATEUR ****************/
    Route::resource('/user', 'UserController');
    /********* ROLE ****************/
    Route::resource('/role', 'RoleController');
    // Quartier
    Route::resource('/Quartier','QuartierController');
    // endQuartier
    // taxes
    Route::resource('/taxes','TaxesController');
    // endtaxes
    // Activites
    Route::resource('/Activites','ActivitesController');
    // endActivites
    // Zones
    Route::resource('/zones','ZonesController');
    Route::get('/zones/{zonesPdf}', ['as' => 'zonesPdf.pdf', 'uses' => 'ZonesController@zonesPdf']);

    // endzones
    // typesRedevabilites
    Route::resource('/typeRedevabilites','ControllertypesRedevabilites');
    // endetypredevabilites
    // Redevables
    Route::resource('/Redevables','ControllertRedevables');
    // endRedevables
    // Payements
    Route::resource('/Payements','PayementsController');
    // endPayement

});
