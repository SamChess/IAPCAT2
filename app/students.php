<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
	protected $fillable = ['full_name', 'dob', 'address'];

    public function fees()
    {

        return $this->hasMany('App\fees');
    }

}
