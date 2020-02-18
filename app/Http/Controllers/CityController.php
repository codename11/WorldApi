<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Country;
use App\CountryLanguage;
use App\City;
use App\Http\Resources\City as CityResource;
use App\Http\Resources\Country as CountryResource;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::with('country',"language")->paginate(5);
        return CityResource::collection($cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod("post")){

            $city = new City;
            $city->Name = $request->Name;
            $city->CountryCode = $request->CountryCode;
            $city->District = $request->District;
            $city->Population = $request->Population;

            $country = Country::find($request->CountryCode);

            if($city->save() && $country && $request->main===true){
                
                $country->Capital = City::latest()->first()->ID;
                $country->save();

                return new CountryResource($country);
            }
            else{
                return new CountryResource($country);
            }

        }

        if($request->isMethod("put")){
            
            $city = City::findOrFail($request->ID);
            
            $city->Name = $request->Name;
            $city->CountryCode = $request->CountryCode;
            $city->District = $request->District;
            $city->Population = $request->Population;
            
            if($city->save()){
                return new CityResource($city);
            }
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::with('country',"language")->where("ID",$id)->get();
    
        return new CityResource($city);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city = City::where("ID",$id);
        $deletedCity = City::where("ID",$id)->get();
        
        if($city->delete()){
            return new CityResource($deletedCity);
        }
    }
}
