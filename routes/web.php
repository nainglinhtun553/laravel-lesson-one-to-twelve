<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function(){
    $num1=10;
    $num2=20;
    $result=$num1+$num2;
    return view('home',["name"=>"Code Labs","leature"=>"web development","age"=>"<h2 style='color:red;'>Your age is 26</h2>"],["job"=>"Web Developer","num1"=>$num1,"num2"=>$num2,"result"=>$result]);
})->name('myhome');

// Route::get('about',function(){
//     return view('aboutpage',["message"=>"This is testing message from server site."]);
// });


// Route::get('about',function(){
//     $num1=20;
//     $num2=30;
//     $result=$num1+$num2;
//     return view('aboutpage',["message"=>"This is testing message from server site.","result"=>$result]);
// });

// another way 
// Route::view(‘URL’,’view’,’parameter’)
// Route::view('about','aboutpage',["message"=>"This is testing message from server site."]);

Route::view('about','aboutpage',["num1" =>10, "num2"=>20,"fruits"=>['apple','mango','banana',"name"=>"code labs"]]);

// direct for services page
Route::view('customer/help/service','service')->name('ser');

route::get('contact',function(){
    return view('contact');
});

Route::get('customer',function(){
    return view('customer.list');
});



Route::get('vipMaleCustomer',function(){
    return view('customer.vipCustomer.male.list');
});


Route::get('vipFemaleCustomer',function(){
    return view('customer.vipCustomer.female.list');
});



Route::get('resultPage/{num1?}/{num2?}',function($num1,$num2){

    $myresult=$num1+$num2;
    return view('result',['result'=>$myresult]);

})->name('myCalculation');


Route::get('paraPass/{name?}',function($myName="Your Name is empty"){
    return $myName;

})->name('passWithroute');

// Route::get('/about',function(){
//     return "About Page";

// });


// Route::get('user/contact',function(){
//         return "user contact page.";
// });



// parameter with default value 
// Route::get('customer/{name?}/{age?}/{job?}',function($name="Aung Aung",$age=null,$job="Web Developer"){
//         return "customer name is" ."&nbsp;". $name. "&nbsp;"."and his age is "."&nbsp;".$age."<br>"."his job is ". $job;
// });



// function sum($num1){
//     return $num1;
// }
// sum(1);




?>