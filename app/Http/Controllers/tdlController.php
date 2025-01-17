<?php

namespace App\Http\Controllers;


use App\Models\task;
use Illuminate\Http\Request;

class tdlController extends Controller
{
    public function tdl(Request $request){
        $input=$request->validate([
        'title'=>['required'],
        'body'=>['required']
        ]
    );
    $input['title']=strip_tags($input['title']);
    $input['body']=strip_tags($input['body']);
    $input['user_id']=auth()->id();
    task::create($input);
    return redirect('to_do_list');
}

    public function edit_task(task $task ,request $request){
        if(auth()->user()->id !== $task['user_id']){
            return redirect('/home');
        }
        return view('edit_tdl',['task'=>$task]);
    }

public function edit_tdl(task $task ,request $request){
        if(auth()->user()->id !== $task['user_id']){
            return redirect('/home');
        }
      
       
            return view('edit_tdl',['to_do_list'=>$task]);
            
       
            
    }
    public function updated_tdl(task $task,Request $request){
        if(auth()->user()->id !== $task['user_id']){
            return redirect('/home');
        }
        $input=$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        
        $input['title']=strip_tags($input['title']);
        $input['body']=strip_tags($input['body']);
        $task->update($input);
        return redirect('/to_do_list');
        
    }

    public function delete_tdl(task $task){
        if(auth()->user()->id === $task['user_id']){
            $task->delete();
        }
      return redirect('/to_do_list');
    }  
}