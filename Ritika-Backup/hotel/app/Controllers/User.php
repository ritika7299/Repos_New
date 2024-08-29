<?php

namespace App\Controllers;
use App\Models\UserModel;


class User extends BaseController
{

    public function __construct()
    {
        $this->UserModel = new UserModel();

    }
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
        return view('users_layouts/register');

    }

    public function do_signup()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'username' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('user/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }

    public function login()
    {
        return view('users_layouts/login');
    }

    public function do_login()
    {
        helper(['form', 'url']);
        $session = session();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[8]'
            ];
            if ($this->validate($rules)) {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getPost('email'))->first();

                if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                    $session->set([
                        'user_id' => $user['id'],
                        'username' => $user['username'],
                        'logged_in' => true
                    ]);
                    return redirect()->to('/dashboard');
                } else {
                    $session->setFlashdata('error', 'Invalid login credentials');
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view('login', $data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/user/login');
    }
    public function dashboard()
    {
        return view('users_layouts/dashboard');

    }


    /*public function login()
    {
        return view('users_layouts/login');

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
    
    public function invoice()
    {
        return view('users_layouts/invoice');

    }
    public function reservation()
    {
        return view('users_layouts/reservation');

    }*/

}