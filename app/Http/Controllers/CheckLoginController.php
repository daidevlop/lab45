<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckLoginController extends Controller
{
    public function index(){
        return view('Auths.CheckLogin');
    }
}
