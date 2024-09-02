<?php

namespace App\Controllers;
use App\Models\UserModel;


class User extends BaseController
{

    // public function __construct()
    // {
    //     helper(['url', 'form']);
    // }

    protected $helpers = ['form', 'url'];
    public function index()
    {
        echo view('users_layouts/login');
    }

    function register()
    {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.user_email]',
            'password' => 'required|min_length[6]',
            'cpass' => 'required|matches[password]'
        ]);
        if (!$validation) {
            return view('users_layouts/register', ['validation' => $this->validator]);
        } else {
            $encrypter = service('encrypter');
            $model = new UserModel();
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => $encrypter->encrypt($this->request->getVar('password'))
            ];
            $model->insert($data);

        }

        // echo view('users_layouts/register');

    }



    public function reset_password()
    {
        return view('users_layouts/reset-password');

    }

    public function dashboard()
    {
        return view('users_layouts/dashboard');

    }
    public function invoice()
    {
        return view('users_layouts/invoice');

    }
    public function reservation()
    {
        return view('users_layouts/reservation');

    }

}