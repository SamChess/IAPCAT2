<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Fees;
use App\Students;

class FeesController extends Controller
{
      public function payFees(){

    	  return view('sam/fees');

    }
    public function insert(Request $request){

    	request()->validate([
    		'student_number'=>'required',
    		'payment_date'=>'required',
    		'amount'=>'required'
    		
    	]);

		$student_number = $request->input('student_number');
		$payment_date= $request->input('payment_date');
		$amount = $request->input('amount');
		$data=array("student_number"=>$student_number,"payment_date"=>$payment_date,"amount"=>$amount);

		DB::table('fees')->insert($data);

	
		return redirect()->back()->with('message', 'Your Fees has been recorded successfully!');
	}
     public function index() {

      $fees = fees::all()->toArray();
      $students=students::all();


      return view('sam.fees',compact('fees','students'));

      }
       

  
	
}
