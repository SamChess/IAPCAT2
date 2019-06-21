<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
     public function view(){

    	  return view('sam/view');

    }
   
}
