<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fees;

class PaidController extends Controller
{
    
    public function index() {

      $paid = fees::all();
      $total=fees::sum('amount');


      return view('sam.paid',compact('paid','total'));

      }
    
}
