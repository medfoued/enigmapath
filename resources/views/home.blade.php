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
   <div class=items>
    <ul>
      <div class=to_do_list>
        <a href="to_do_list"><img src="{{URL('images/to_do_list.png')}}" id=to_do_list></a>
      </div>
  <div class=calender>
    <a href="not_yet"><img src="{{URL('images/calender.png')}}" id=calender></a>
  </div>
  

    </ul>
   <div class=solo_leveling>
    <a href="not_yet"><img src="{{URL('images/solo leveling_MOD.png')}} " id=solo_leveling></a>
   </div>
</div>
   
   @else
   <div id=container > 
    <img  src="{{URL('images/body.png')}}";>
<h1 >About</h1>
   <div class=alert> 
    <h3> you have to sign up or log in if you have account to get the home users</h3>
    <a href="signUp"><button>Sign Up</button></a>
    <a href="login"><button>Log in</button></a>

   </div>
      <div id=text><a id=disc>Enigmapath is a dynamic, ever-evolving platform that begins with a simple calendar and to-do list but holds the promise of becoming much more. As a compound project, it’s designed to combine various tools and features that not only help but also captivate and inspire users. Its purpose isn’t fixed; it transforms and adapts, growing into whatever its users need it to be. Enigmapath is a journey into the unknown, where curiosity meets innovation, and the possibilities are endless.</a></div>
        
    <div id=main> 
    </div>
   </div>
   
   @endauth
   
    @include('footer')

</body>
</html>
