<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{URL('/CSS/home.css')}}">
</head>
<body>
    
   @include('header')
   @auth
  <div class="registred">
    <img  src="{{URL('images/body.png')}}";>
    <form action="/logout" method="POST" id="form"> 
      @csrf
      
        <a>Hello {{Auth()->user()->username}}</a><br>
            
     
      <br>
      <a>Congrats you are registered
     </a><br><br>
     <a> You are now logged in  </a><br><br>
     <a> You can click log out if you want
     </a><br>
    <button >log out</button>
 </form> 

 </div>
<div id=main> 
</div>
<div id=me7rez></div>
   @else
   
   <div class="registred">
      <img  src="{{URL('images/body.png')}}";>
      <form>
   @csrf
    <a> You are not logged in   </a><br><br>
    <a> You can click sing up to create account
    </a><br>
    <a> Or click log in if you have one
    </a><br>
   <button href="/signUp">signUp</button>
   <button href="/login">Log in</button>
      </form>
   </div> 
<div id=me7rez></div>
   @endauth
   
    @include('footer')

</body>
</html>
