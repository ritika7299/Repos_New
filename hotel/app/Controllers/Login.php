<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('users_layouts/login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $model->getUserByusername($username);

        if ($user && password_verify($password, $user['password'])) {
            $session->set('user', $user);
            return redirect()->to('users_layouts/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('users_layouts/login');
        }
    }
}
