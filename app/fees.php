<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fees extends Model
{
     public function students()
    {
    	
    	// protected $fillable = ['student_number', 'payment_date', 'amount'];

        return $this->belongsTo('App\students');
    }
   
}
