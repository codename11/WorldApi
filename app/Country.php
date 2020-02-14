<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';
    //protected $primaryKey = 'Code';
    
    public function language(){
        return $this->hasMany("App\CountryLanguage", "CountryCode","Code");
    }

    public function capital(){
        return $this->hasOne("App\City", "ID","Capital");
    }

}
