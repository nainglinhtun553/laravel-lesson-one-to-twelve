<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <style>
    
    a{
      text-decoration: none;

    }
    *{
      color:red;
      
    }
  </style>
</head>
<body>

  <a href="{{route('myhome')}}">Home</a> |
  <a href="{{url('about')}}">About</a> |
  <a href="{{url('contact')}}">Contact</a> |
  <a href="{{route('ser')}}">Service</a>
  <hr>
  <h1 style="color:blue;">This is home page.</h1>


  {{url('about')}}
  
  <h3>Your Name is {{$name}}</h3>
  <h3>the leature is {{$leature}}</h3>
  <h3>Your job is {{$job}}</h3>

  {!! $age !!}
   {{$num1}}+{{$num2}}= {{$result}}

   <hr>
   <a href="{{url('resultPage/20/30')}}">URL</a>|
   <a href="{{route('myCalculation',[50,40])}}">Route </a>|
   <a href="{{route('passWithroute','Naing Lin Htun')}}">Para Pass</a><br>  

   <img src="{{asset('image/photo.png')}}" width="300px" style="margin:5px;">





  
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>