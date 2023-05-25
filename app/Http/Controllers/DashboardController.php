<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.dashboard');
    }

    public function addSeller(){
        return view('admin.seller.add-seller');
    }

    public function manageSeller(){
        return view('admin.seller.manage-seller');
    }

    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function manageCategory(){
        return view('admin.category.manage-category');
    }

/*    public function adminLogin(){
        return view('admin.login.login');
    }

    public function adminRegister(){
        return view('admin.login.register');
    }*/
}
