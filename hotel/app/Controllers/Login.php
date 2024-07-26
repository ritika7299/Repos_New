<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('layout/login');
        // echo "Hello, login here!";
    }
}