<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
Use App\Http\Controllers\loginController;


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
//passing data using routing
// Route::get('/{name}', function ($name) {
//     return view('welcome',['name'=>$name]);
// });

// Route::get('/',function(){
//     // return redirect("about");
//     return view('welcome');
// });
// Route::get('/about/{name}', function ($name) {
//     return view('about',["name"=>$name]);
// });
// // Route::view("contact","contact");

// Route::get('contact/{address}', [UsersController::class,"viewload"]);

// Route::get('user/{name}', [UserController::class, "showNow"]);

// Route::view('user','users');

Route::get('/',function(){
    return view('test');
});

Route::get('/home',function(){
    return view('home');
});

Route::post('users',[loginController::class,"loginApprove"]);


// Route::resource('CustomerResources', CustomerController::class);
