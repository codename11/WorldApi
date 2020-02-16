<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    //protected $primaryKey = 'CountryCode';

    public function country(){
        return $this->belongsTo("App\Country", "CountryCode","Code");
    }

    public function language(){
        return $this->hasMany("App\CountryLanguage","CountryCode", "CountryCode");
    }
    
}
