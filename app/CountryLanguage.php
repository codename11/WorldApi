<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryLanguage extends Model
{
    protected $table = 'countrylanguage';

    public function country(){
        return $this->hasMany("App\Country", "Code","CountryCode");
    }

}
