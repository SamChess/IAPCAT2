<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Input;
use App\fees;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'StudentsController@register');

Route::get('/fees', 'FeesController@payFees');

Route::get('/view', 'ViewController@view');


Route::post('create','StudentsController@insert'); 

Route::post('record','FeesController@insert'); 

Route::get('/fees','FeesController@index');

 Route::get('/view/action','ViewController@action')->name('view.action');

Route::get('/paid','PaidController@index');


Route::post('/search',function(){
    $q = Input::get ( 'q' );
     $user = fees::where('student_number','LIKE','%'.$q.'%')->get();
     if(count($user) > 0){

        return view('sam.view')->withDetails($user)->withQuery ( $q );
    }
    else {

    	return view ('sam.view')->withMessage('No Details found. Try to search again !');
    }
});

