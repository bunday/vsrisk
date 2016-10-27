<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organisation extends Model
{
    //
    protected $fillable = [
        'name', 'abv',
    ];

    public function users(){
    	return $this->hasOne('App\User');
    }

    public function assest(){
    	return $this->hasMany('App\Asset');
    }

    public function impact(){
    	return $this->hasOne('App\Impact');
    }

    public function likelihood(){
    	return $this->hasOne('App\Likelihood');
    }

    public function formular(){
    	return $this->hasOne('App\Formular');
    }


}
