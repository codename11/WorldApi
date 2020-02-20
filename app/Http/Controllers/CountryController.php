<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Country;
use App\City;
use App\CountryLanguage;
use App\Http\Resources\Country as CountryResource;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $countries = Country::with('capital',"cities","language")->paginate(5);

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

        $country = null;
        $capital = null;

        $validation = Validator::make(
            $request->all(),
            [
                'Code' => 'required|max:3',
                'Name' => 'required|max:52',
                'Continent' => 'required|in:Asia,Europe,North America,Africa,Oceania,Antarctica,South America',
                'Region' => 'required|max:26',
                
                'IndepYear' => 'required|numeric|digits_between:1,6',
                'Population' => 'required|numeric|digits_between:1,11',
                
                'LocalName' => 'required|max:45',
                'GovernmentForm' => 'required|max:45',
                'HeadOfState' => 'required|max:60',
                'Capital' => 'numeric|digits_between:1,11|nullable',
                'Code2' => 'required|max:2',

                'SurfaceArea' => 'required|numeric',
                'LifeExpectancy' => 'required|numeric',
                'GNP' => 'required|numeric',
                'GNPOld' => 'numeric|nullable',
            ]
        );

        $errors = $validation->errors();
        if($validation->fails()){
            return $errors->toJson();
        }
        
        if($request->isMethod("post")){

            $country = new Country; 
            $country->Code = $request->input("Code");
            $country->Name = $request->input("Name");
            $country->Continent = $request->input("Continent");

            $country->Region = $request->input("Region");
            $country->SurfaceArea = $request->input("SurfaceArea");
            $country->IndepYear = $request->input("IndepYear");

            $country->Population = $request->input("Population");
            $country->LifeExpectancy = $request->input("LifeExpectancy");
            $country->GNP = $request->input("GNP");

            $country->GNPOld = $request->input("GNPOld");
            $country->LocalName = $request->input("LocalName");
            $country->GovernmentForm = $request->input("GovernmentForm");

            $country->HeadOfState = $request->input("HeadOfState");
            $country->Capital = null;
            $country->Code2 = $request->input("Code2");

            if($country->save()){
                return new CountryResource($country);
            }

        }

        if($request->isMethod("put")){

            $country = Country::findOrFail($request->Code);
            
            $country->Name = $request->input("Name");
            $country->Continent = $request->input("Continent");

            $country->Region = $request->input("Region");
            $country->SurfaceArea = $request->input("SurfaceArea");
            $country->IndepYear = $request->input("IndepYear");

            $country->Population = $request->input("Population");
            $country->LifeExpectancy = $request->input("LifeExpectancy");
            $country->GNP = $request->input("GNP");

            $country->GNPOld = $request->input("GNPOld");
            $country->LocalName = $request->input("LocalName");
            $country->GovernmentForm = $request->input("GovernmentForm");

            $country->HeadOfState = $request->input("HeadOfState");
            $country->Capital = $request->input("Capital");
            $country->Code2 = $request->input("Code2");

            if($country->save()){
                return new CountryResource($country);
            }

        }

        
        
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::where("Code",$id);
        $deletedCountry = Country::where("Code",$id)->get();
        
        if($country->delete()){
            return new CountryResource($deletedCountry);
        }

    }
}
