<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL('/CSS/login.css')}}">
    <title>Document</title>
</head>
<body>
    @include('header')
    <div class="login">
   
    <h2>log in</h2> 
    <form action="/login" method="post">
        @csrf  
    <label >username</label>
    <input type="text" name="username">
    <label >password</label>
    <input type="password" name="password">
    <input type="submit" value="log in">
   
         
    </form>
    </div>
    @include('footer')
</body>
</html>