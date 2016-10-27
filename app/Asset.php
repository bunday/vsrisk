<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    //
    public function organisation(){
        return $this->belongsTo('App\organisation');
    }
}
