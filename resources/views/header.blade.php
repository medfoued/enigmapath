<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="{{url('CSS/header.css')}}">
</head>
<body>
    <header>    
    <div class=headerContainer> 

    <img src="{{URL('images/logo.png')}}" id=img>
<div class="headerNav">
    @auth
    <ul><li><a href="/home">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="contactUs">Contact Us</a></li>
        <li><a href="account">Account</a></li>
        <li> <a href="/logout"
            onclick="event.preventDefault();       
      
             document.getElementById('logout-form').submit();">
             Log Out
         </a>
         <form id="logout-form" action="/logout" method="POST" >
          @csrf
      </form>
    </li>
        
        </ul>
    @else
    <ul><li><a href="home">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="contactUs">Contact Us</a></li>
        <li><a href="signUp">Sign Up</a></li>
        <li><a href="login">Log In</a></li>
    
    </ul>
    
    @endauth
   
            
        </div>
        </div>  
        </header>

    
</body>
</html>