<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Contact ; 

use App\SocialMediaContact ; 

class Branch extends Model
{
    

    protected $fillable = ['code' , 'description' , 'cover_front','name'];


    public function contacts(){

        return $this->hasMany('App\Contact');
    }

    public function socialMediaContacts(){


        return $this->hasMany('App\SocialMediaContact');
    }

    public function address(){

        return $this->hasOne('App\Address');
    }
}
