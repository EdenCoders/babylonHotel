<?php

namespace App;

use App\Branch ; 

use Illuminate\Database\Eloquent\Model;

class SocialMediaContact extends Model
{
    protected $fillable = ['type' , 'url' , 'branch_id'];


    public function branch(){


        return $this->belongsTo('App\Branch');
    }
}
