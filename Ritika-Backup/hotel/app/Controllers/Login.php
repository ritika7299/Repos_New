<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function index()
    {
        return view('users_layouts/login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $users = $model->getUserByusername($email);

        if ($users && password_verify($password, $users['password'])) {
            $session->set('users', $users);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('login');
        }
    }

    // public function auth()
    // {
    //     // $session = session();
    //     $userModel = new UserModel();
    //     $email = $this->request->getPost('email');
    //     $password = $this->request->getPost('password');

    //     $result = $userModel->where('email', $email)->first();
    //     // print_r($result);

    //     if ($result->id > 0) {
    //         if (password_verify($password, $result->password)) {
    //             $this->session->set('user', $result);
    //             return redirect()->to('/users_layouts/dashboard');

    //         } else {
    //             echo 'Invalid email or Password';

    //         }
    //     } else {
    //         echo 'Invalid email or Password';

    //     }

    // }
    public function dashboard()
    {
        return view('users_layouts/dashboard');
    }
}
