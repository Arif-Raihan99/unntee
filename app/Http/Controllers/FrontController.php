<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
    }

    public function front(){
        return view('frontend.pages.dashboard');
    }
}
