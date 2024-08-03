<?php

namespace App\Controllers;

class UserCon extends BaseController
{
    public function index()
    {
        return view('users_layouts/login');
        // echo "User login";
    }
    public function register()
    {
        return view('users_layouts/register');
        // echo "User login";
    }
    public function dashboard()
    {
        return view('users_layouts/dashboard');
        // echo "User dashboard";
    }

    public function do_login()
    {
        // $userModel = new userModel();
        echo "Login page submitted";


    }
}