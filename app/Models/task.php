<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id',
       
        
    ];
    public function user(){
        return $this->belongsto(User::class,'user_id');
    }
   
}
