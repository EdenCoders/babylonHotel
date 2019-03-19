<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['city','state','country','line1','langtitude','longtitude','postal_code'];


    //Build a relationship to make the address belongs to the Branch 
    public function branch(){

        return $this->belongsTo('App\Branch');
    }
}
