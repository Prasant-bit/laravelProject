<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;

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

Route::get('/',function(){
    // return redirect("about");
    return view('welcome');
});
Route::get('/about/{name}', function ($name) {
    return view('about',["name"=>$name]);
});
// Route::view("contact","contact");

Route::get('contact/{address}', [UsersController::class,"viewload"]);

Route::get('user/{name}', [UserController::class, "showNow"]);

Route::view('user','users');
