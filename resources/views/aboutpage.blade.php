<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    a{
      text-decoration: none;
    }

    
  </style>
</head>
<body>
 <a href="{{route('myhome')}}">Home</a> |
  <a href="{{url('about')}}">About</a> |
  <a href="{{url('contact')}}">Contact</a> |
  <a href="{{route('ser')}}">Service</a>
          <hr>  


 <?php 

 echo "<h1 style='color:red;'>This is About Page...</h1>";
 echo "Hello"."<br>";


 ?>
 {{$num1}}+{{$num2}}={{$num1+$num2}} 
 <hr>
 


 @php 
  echo date("d/m/Y");

  @endphp
  <br>


  @if(false)
    <h1>This is true status</h1>
    @elseif(true)
    <h1>This is false status</h1>
    <h1>false</h1>

    @else
    <h1>This is no process</h1>
    <h1>This is not working </h1>

  @endif


  <hr>






@foreach ($fruits as $f)
<h3>{{$f}}</h3>
@endforeach


<hr>



@isset($name)
  <h1>{{ $name }}</h1>
@endisset


@empty($name)
  <h1>This is empty</h1>
@endempty





</body>
</html>




