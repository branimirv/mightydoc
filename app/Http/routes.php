<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::get('/', function() {
    return view('welcome');
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    /*napravi više ruta koje se potrebne za edit, update, create, odnosi se na route resoursces*/
    
    Route::resource('symptom', 'SymptomController', ['except' => ['show', 'destroy']]);
    Route::resource('diseaseGroup', 'DiseaseGroupController', ['except' => ['show', 'destroy']]);
    Route::resource('disease', 'DiseaseController', ['except' => ['show', 'destroy']]);
    Route::resource('bodyArea', 'BodyAreaController', ['except' => ['show', 'destroy']]);


});
	
	Route::group(array('prefix' => 'api'), function() {
    	Route::get('test', 'ApiController@index');
});
	

    Route::group(['middleware' => 'web'], function() {
    Route::get('/disease/api/test', 'DiseaseController@test');
});



//Route::resource('/symptom', 'SymptomController');