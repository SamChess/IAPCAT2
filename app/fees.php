<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fees extends Model
{

	 protected $fillable = ['student_number', 'payment_date', 'amount'];

     public function students()
    {

        return $this->belongsTo('App\students');
    }
   
}
