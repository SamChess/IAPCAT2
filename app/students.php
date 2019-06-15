<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{

    public function fees()
    {
        return $this->hasMany('App\fees');
    }

}
