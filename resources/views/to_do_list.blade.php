<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('CSS/to_do_list.css')}}">
    <title>Document</title>
</head>
 
<body>
    @include('header')
   <div class=all>
    <form action="/to_do_list" method="POST" id="form" >
    @csrf
    <div class=task>
        <input type="text" name="title" placeholder="Title">
        <textarea name="body" placeholder="discreprtion"></textarea>
        <button>Add</button><br><br>
    </form>
   
        @foreach($tasks as $task)
        <ul id=hline><h3>{{$task['title']}} </h3><h2 id=writer> by {{$task->User->username}}</h2></ul>
        
        <p id=body>{{$task['body']}}</p>
        <p><a href="/edit_tdl/{{$task->id}}">edit</a></p>
        <form action="/delete_tdl/{{$task->id}}" method="POST" id="form_button">
        @csrf
        @method('DELETE')
        <button>Delete</button>
        
        </form>
        <br>
        <hr>
        <br>
        @endforeach
</div>
    </div>
    <div id=main></div>
    @include('footer')

</body>
</html>