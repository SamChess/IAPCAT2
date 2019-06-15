<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    public function register(){

    	  return view('sam/register');

    }
    public function insert(Request $request){

		$full_name = $request->input('full_name');
		$dob= $request->input('dob');
		$address = $request->input('address');
		$data=array("full_name"=>$full_name,"dob"=>$dob,"address"=>$address);

		DB::table('students')->insert($data);

		echo "Record inserted successfully.<br/>";
	}
}
