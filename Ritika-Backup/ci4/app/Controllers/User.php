<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user/login');
    }
    public function register()
    {
        return view('user/register');
    }

    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel->save($data);

        return redirect()->to('/register')->with('success', 'Registration successful');
    }
}