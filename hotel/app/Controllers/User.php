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
        echo view('users_layouts/register');

    }

    public function save()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.user_email]',
            'password' => 'required|min_length[6]',
            'cpass' => 'matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('users_layouts/register', ['validation' => $validation]);
        }

        $userModel = new UserModel();
        $userModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to('users_layouts/register')->with('success', 'Registration successful');
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