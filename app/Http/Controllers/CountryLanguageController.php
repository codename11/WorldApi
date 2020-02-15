<?php

namespace App\Http\Controllers;

use App\CountryLanguage;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Country;
use App\City;
use App\Http\Resources\language as language;

class CountryLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countryLanguage = CountryLanguage::with('country')->paginate(5);
        return language::collection($countryLanguage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CountryLanguage  $countryLanguage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $language = CountryLanguage::with('country')->where("Language",$id)->get();
    
        return new language($language);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CountryLanguage  $countryLanguage
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryLanguage $countryLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CountryLanguage  $countryLanguage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountryLanguage $countryLanguage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CountryLanguage  $countryLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryLanguage $countryLanguage)
    {
        //
    }
}
