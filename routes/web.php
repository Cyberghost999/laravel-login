<?php

use App\Http\Controllers\user\UserController;
use Illuminate\Http\Request;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// Schema::create('Users',function($newtable){
       // 	$newtable->increments('id');
       // 	$newtable->string('Name',100);
       // 	$newtable->string('Email');
       // 	$newtable->string('Contact');
       // 	$newtable->string('Password');
       // });

Route::get('/', array('as'=>'home','uses'=>'user\UserController@home'));

Route::get('/login',array('as'=>'login','uses'=>'user\UserController@getLogin'));

Route::post('/login','user\UserController@postLogin');

Route::get('/signup',array('as'=>'signup','uses'=>'user\UserController@getRegister'));

Route::post('/signup','user\UserController@postRegister');

// Route::get('ID/{id}',function($id){
//    echo 'ID: '.$id;
// });

// Route::get('/hello', function () {
//     return view('hello');
// });
Route::get('/dashboard', 'user\UserController@dash');
Route::get('/logout', 'user\UserController@logout');