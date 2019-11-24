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

    // $to_name="Ankit Gupta";
    // $to_email="ankithbti007@gmail.com";
    // $data = array('name'=>'Peter', 'body'=>'Test mail from localhost');
    // Mail::send('mail', $data, function($message) use ($to_name, $to_email){
    //     $message->to($to_email)->subject('Subject of mail');
    // });
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test_id/{id}', function ($id) {
    //return $id;
    return view('test', ["id" => $id]);
});

Route::redirect('/here', 'test');

Route::get('users', 'Users@index');
Route::get('users/{id}', 'Users@show');


Route::view('/mobiles', 'mobile');


Route::view('/form', 'form');
Route::get('form_submit', 'Blogs@submit');

Route::get('/db', 'Blogs@testdb');


