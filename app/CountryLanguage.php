<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryLanguage extends Model
{
    protected $table = 'countrylanguage';
    //protected $primaryKey = 'CountryCode';

    public function country(){
        return $this->belongsTo("App\Country","CountryCode", "Code");
    }

}
