<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function viewload($address){
        return view("contact", ["address"=>$address]);
    }
}
