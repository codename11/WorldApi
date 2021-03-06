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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List countries
Route::get("countries", "CountryController@index");

//Show country(single)
Route::get("country/{id}", "CountryController@show");

//Create new country
Route::post("country", "CountryController@store")->middleware('ipcheck');

//Update country
Route::put("country/{id}", "CountryController@store")->middleware('ipcheck');

//Delete country
Route::delete("country/{id}", "CountryController@destroy")->middleware('ipcheck');

//List cities
Route::get("cities", "CityController@index");

//Show city(single)
Route::get("city/{id}", "CityController@show");

//Create city
Route::post("city", "CityController@store")->middleware('ipcheck');

//Update city(single)
Route::put("city/{id}", "CityController@store")->middleware('ipcheck');

//Delete city
Route::delete("city/{id}", "CityController@destroy")->middleware('ipcheck');

//List languages
Route::get("languages", "CountryLanguageController@index");

//Show language(single)
Route::get("language/{id}", "CountryLanguageController@show");

//Create language
Route::post("language", "CountryLanguageController@store")->middleware('ipcheck');

//Update language(single)
Route::put("language/{id}", "CountryLanguageController@store")->middleware('ipcheck');

//Delete language
Route::delete("language/{id}", "CountryLanguageController@destroy")->middleware('ipcheck');

//Error 403
//Route::get("errors/403", "ErrorsController@error403");
Route::get('errors/403', [
    'as' => 'errors/403',
    'uses' => 'ErrorsController@error403',
]);