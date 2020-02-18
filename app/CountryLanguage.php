<?php

namespace App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CountryLanguage extends Model
{
    protected $table = 'countrylanguage';
    protected $primaryKey = 'Language';
    public $incrementing = false;
    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    protected  $fillable=['CountryCode','Language', 'IsOfficial', 'Percentage'];

    public function country(){
        return $this->belongsTo("App\Country","CountryCode", "Code");
    }

}
