<?php

namespace App\Http\Controllers;

use App\CountryLanguage;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Country;
use App\City;
use App\Http\Resources\language as LanguageResource;
use Illuminate\Support\Facades\Validator;

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
        return new LanguageResource($countryLanguage);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = Validator::make(
            $request->all(),
            [
                'CountryCode' => 'required|max:3',
                'Language' => 'required|max:30',
                'IsOfficial' => 'required|in:T,F',
                'Percentage' => 'required|numeric',
            ]
        );

        $errors = $validation->errors();
        if($validation->fails()){
            return $errors->toJson();
        }

        if($request->isMethod("post")){

            $language = new CountryLanguage;

            $language->CountryCode = $request->CountryCode;
            $language->Language = $request->Language;
            $language->IsOfficial = $request->IsOfficial;
            $language->Percentage = $request->Percentage;

            if($language->save()){

                $languageWithCountry = CountryLanguage::with('country')->where("Language",$language->Language)->get();
                return  new LanguageResource($languageWithCountry);

            }  

        }

        if($request->isMethod("put")){

            $language = CountryLanguage::where("Language",$request->Language)->first();

            $language->CountryCode = $request->CountryCode;
            $language->Language = $request->Language;
            $language->IsOfficial = $request->IsOfficial;
            $language->Percentage = $request->Percentage;

            if($language->save()){
                return  new LanguageResource($language);
            }
            //return  new LanguageResource($language);
        }

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
    
        return new LanguageResource($language);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CountryLanguage  $countryLanguage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = CountryLanguage::where("Language",$id);
        $deletedLanguage = CountryLanguage::where("Language",$id)->get();
        
        if($language->delete()){
            return new LanguageResource($deletedLanguage);
        }
    }
}
