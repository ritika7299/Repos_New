<?php

namespace App\Controllers;

class AdminCon extends BaseController
{
    public function index()
    {
        return view('admin_layouts/login');
    }

    public function dashboard()
    {
        return view('admin_layouts/dashboard');

    }


}