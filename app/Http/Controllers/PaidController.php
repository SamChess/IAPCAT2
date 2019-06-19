<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fees;

class PaidController extends Controller
{
    //  public function paid(){

    // 	  return view('sam/paid');

    // }
    public function index() {

      $paid = fees::all();
      $total=fees::sum('amount');
      // dd($total);


      return view('sam.paid',compact('paid','total'));

      }
    // public function total(){
    // 	$total=fees::with(['amount' => function($query){
    //     $query->sum('amount');
    //     }])->get();
    //     dd($total);

    //     return view('sam.paid',compact('total'));
    // }
  
}
