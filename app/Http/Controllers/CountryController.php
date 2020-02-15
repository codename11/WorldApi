<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Country;
use App\City;
use App\CountryLanguage;
use App\Http\Resources\Country as CountryResource;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$city = City::find(1)->country()->get();
        //$countries = Country::paginate(15);
        //$capital = Country::where("Code","AFG")->with('capital')->get();
        //$country = Country::where("Code","AFG")->get();
        //$country = Country::where("Capital",$city->ID)->get();
        //$language = Country::where("Code","AFG")->with('language')->get();
        //$allInOne = Country::where("Code","AFG")->with('capital',"language")->get();
        //$allInAll = Country::with('capital',"language")->get();
        $countries = Country::with('capital',"cities","language")->paginate(5);
        /*$response = array(
            "capital" => $capital,
            "country" => $country,
            "language" => $language,
            "allInOne" => $allInOne,
            "allInAll" => $allInAll,
        );*/
        //return response()->json($allInOne);
        return CountryResource::collection($countries);
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
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::with('capital',"cities","language")->where("Code",$id)->get();
    
        return new CountryResource($country);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
