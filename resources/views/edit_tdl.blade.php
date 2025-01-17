<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('CSS/edit_task.css')}}">

    <title>Document</title>
</head>
<body>
    @include('header')
    <div class=all>
    <h1>Edit Task</h1>
    <form action="/edit_tdl/{{$task->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class=task>
        <input type="text" name="title" value="{{$task->title}}" >
        <textarea name="body">{{$task->body}}</textarea>
        <button>Save changes</button>
    </div>
    </form>
</div>
    @include('footer')
    
</body>
</html>