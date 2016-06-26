<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
	/******** specify all the fields of the model that are mass-assignable *********/
	
	protected $fillable = [
    'hotelName',
    'hotelAddress',
    'hotelPrice',
    'hotelImage',
    ];

    
     /********* Relationship with comment ********/
     
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
