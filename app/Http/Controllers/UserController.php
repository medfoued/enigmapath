<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    
   public function signUp(Request $request){
    $input=$request->validate([
        'username'=>['required','min:3','max:200',Rule::unique('users','username')],
        'email'=>['required','email',Rule::unique('users','email')],
        'age'=>['required'],
        'gender'=>['required'],
        'password'=>['required','min:8','max:200',Rule::unique('users','password')]
    
    ]);
     
    $input['password']=bcrypt($input['password']);
    
    $user=USER::create($input);
    
    auth()->login($user);
    
    return redirect('/sinception');
    
   
     
   }
   public function login(Request $request){
    $input=$request->validate([
        'username'=>['required','min:3','max:200'],
        'password'=>['required','min:8','max:200'],
    
    ]);
    if(auth()->attempt(['username'=>$input['username'],'password'=>$input['password']]))
    $request->session()->regenerate();
    return redirect('logception');
}

    public function logout(Request $request){
        auth()->logout();
        return redirect('/home');
    }
   
}
