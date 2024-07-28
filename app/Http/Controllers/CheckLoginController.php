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
        if(Auth::attempt($req->except('_token'))){
            return redirect()->route('account.index');
        }
    }
}
