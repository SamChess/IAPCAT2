<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{

    public function fees()
    {

    	protected $fillable = ['full_name', 'dob', 'address'];

        return $this->hasMany('App\fees');
    }

}
