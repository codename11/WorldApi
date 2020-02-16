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

//List cities
Route::get("cities", "CityController@index");

//Show city(single)
Route::get("city/{id}", "CityController@show");

//List languages
Route::get("languages", "CountryLanguageController@index");

//Show language(single)
Route::get("language/{id}", "CountryLanguageController@show");

//Create new country
Route::post("country", "CountryController@store");

//Update country
Route::put("country/{id}", "CountryController@store");

//Delete country
Route::delete("country/{id}", "CountryController@destroy");
