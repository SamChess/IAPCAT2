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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', 'StudentsController@register');

// Route::get('/register', function () {
//     return view('sam/register');
// });

Route::get('/fees', 'FeesController@payFees');

// Route::get('/fees', function () {
//     return view('sam/fees');
// });

// Route::get('/paid', 'PaidController@paid');

Route::get('/view', 'ViewController@view');


Route::post('create','StudentsController@insert'); 

Route::post('record','FeesController@insert'); 

Route::get('/fees','FeesController@index');

// Route::get('/paid','PaidController@total');

Route::get('/paid','PaidController@index');



