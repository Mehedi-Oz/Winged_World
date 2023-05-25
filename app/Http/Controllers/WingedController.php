<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WingedController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function userLogin(){
        return view('front-end.user.user-login');
    }

    public function userRegister(){
        return view('front-end.user.user-register');
    }
    public function contactUs(){
        return view('front-end.contact.contact-us');
    }
    public function aboutUs(){
        return view('front-end.contact.about-us');
    }

}
