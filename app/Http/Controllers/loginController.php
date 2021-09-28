<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function loginApprove(Request $req){
        $data =  $req->input();
        $req->session()->put('user',$data['email']);
        return redirect('home');
    }
}
