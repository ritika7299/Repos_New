<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        return view('users_layouts/login');
        // echo "User login";
    }
    // public function register()
    // {
    //     return view('users_layouts/register');

    // }
    public function dashboard()
    {
        return view('users_layouts/dashboard');
    }

    // public function invoice()
    // {
    //     return view('users_layouts/invoice');
    // }

    public function login_ac()
    {
        helper(['form']);
        $mod_user = new UserModel();
        $email_ac = $this->request->getVar('email');
        $pass_ac = $this->request->getVar('password');


    }
    public function reservation()
    {
        return view('users_layouts/reservation');
    }
}