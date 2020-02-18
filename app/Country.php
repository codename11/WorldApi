<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';
    protected $primaryKey = 'Code';
    public $incrementing = false;
    protected  $fillable=[
        'Code',
        'Name', 
        'Continent', 
        'Region',
        'SurfaceArea',
        'IndepYear',
        'Population',
        'LifeExpectancy',
        'GNP',
        'GNPOld',
        'LocalName',
        'GovernmentForm',
        'HeadOfState',
        'Capital',
        'Code2'
    ];

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    public function capital(){
        return $this->hasOne("App\City", "ID","Capital");
    }

    public function cities(){
        return $this->hasMany("App\City", "CountryCode","Code");
    }
    
    public function language(){
        return $this->hasMany("App\CountryLanguage", "CountryCode","Code");
    }

}
