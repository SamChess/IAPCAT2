<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fees extends Model
{
     public function students()
    {
        return $this->belongsTo('App\students');
    }

}
