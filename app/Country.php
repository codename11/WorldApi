<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

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
