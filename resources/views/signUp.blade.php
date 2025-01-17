<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL('/CSS/signup.css')}}">

    <title>Document</title>
</head>

    
   
<body>
    @include('header')
    <div class="signUp">
   
    <h2>sign up</h2> 
    <form action="signUp" method="post">
        @csrf  
    <label >username</label>
    <input type="text" name="username">
    <label >email</label>
    <input type="text" name="email">
    <label >age</label>
    <input type="text" name="age">
    <label >gender:</label>
    <div class=radio><label >Male</label>
    <input type="radio" name="gender" value="male"></div>
    <div class=radio> <label >Female</label>
    <input type="radio" name="gender" value="female" ></div>
    <label >password</label>
    <input type="password" name="password">
    <input type="submit" value="sign Up">
   
         
    </form>
    </div>
    @include('footer')
</body>
</html>