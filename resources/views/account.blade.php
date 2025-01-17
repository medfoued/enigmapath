<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('CSS/account.css')}}">
    <title>Document</title>
    

</head>
<body>
    @include('header')
        <div class=info>
            <h2 > Name:  {{Auth()->user()->username}}</h2>
            <h2> Email: {{Auth()->user()->email}}</h2>
            <h2> Age: {{Auth()->user()->age}}</h2>
            <h2> Gender: {{Auth()->user()->gender}}</h2>
            <h2> Password: {{Auth()->user()->password}}</h2>
            <h2> Last info update: {{Auth()->user()->updated_at}}</h2>
      
           <form action="not_yet" >
            <button>change information</button>
           </form>
        </div>
        
        @csrf
        <br>
      
    </h1>
    @include('footer')
</body>
</html>