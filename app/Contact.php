<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

use App\Branch ; 
class Contact extends Model
{
    
    protected $fillable = ['type', 'value' , 'branch_id'];


    public function branch(){


        return $this->belongsTo('App\Branch');
    }
}
