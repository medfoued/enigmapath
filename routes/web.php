<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tdlController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/signUp', function () {
    return view('signUp');
});


Route::get('/header', function () {
    return view('header');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sinception',function(){
    return view('sinception');
});

Route::get('/logception',function(){
    return view('logception');
});


Route::get('/about',function(){
   
    return view('about');
});
Route::get('/to_do_list',function(){
    $tasks=[];
    if(auth()->check()){
        $tasks=auth()->user()->users_to_do_lists()->latest()->get();
    }
   return view('to_do_list',['tasks'=>$tasks]);
  
});

Route::get('/edit_tdl',function(){
    return view('edit_tdl');
});
Route::get('not_yet',function(){
    return view('not_yet');
});
Route::get('/account',function(){
   
   return view('account');
});

Route::get('/logception',function(){
   
   return view('logception');
});

Route::get('calender',function(){
    return view('not_yet');
});
Route::get('/team',function(){
   
    return view('team');
});
Route::get('/News',function(){
   
    return view('not_yet');
});

Route::get('/contactUs',function(){
   
    return view('contactUs');
});
Route::get('/facebook',function(){

    return view('not_here');});
Route::get('/youtube',function(){
   
    return view('not_here');});

Route::get('/twitter',function(){
   
    return view('not_here');});
Route::get('/instagram',function(){
   
    return view('not_here');});

Route::get('/google',function(){
   
    return 'My Email:medfoued.souissi@gmail.com';
    ;});
        
Route::get('edit_tdl/{task}',[tdlController::class,'edit_task']);
Route::put('edit_tdl/{task}',[tdlController::class,'updated_tdl']);
Route::delete('delete_tdl/{task}',[tdlController::class,'delete_tdl']);


Route::post('/signUp',[UserController::class,'signUp']

);
Route::post('/login',[UserController::class,'login']

);
Route::post('/logout',[UserController::class,'logout']

);
Route::post('to_do_list',[tdlController::class,'tdl']);


