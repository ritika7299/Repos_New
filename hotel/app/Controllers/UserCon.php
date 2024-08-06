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
    }

    public function invoice()
    {
        return view('users_layouts/invoice');
    }
}