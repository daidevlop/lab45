<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginController extends Controller
{
    public function index(){
        return view('Auths.CheckLogin');
    }
    public function postLogin(Request $req){
        if(Auth::attempt(['email'=>$req->email])){
            return redirect()->route('account.index');
        }
    }
}
