<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    //
    public function organisation(){
        return $this->belongsTo('App\organisation');
    }
}
