<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formular extends Model
{
    //
    public function organisation(){
        return $this->belongsTo('App\organisation');
    }
    
}
