<?php

namespace App\Controllers;
use App\Models\UserModel;


class User extends BaseController
{
    public function __construct()
    {

        $this->form_validation = \Config\Services::validation();
    }
    public function index()
    {
        return view('users_layouts/register');

    }
    public function do_signup()
    {
        // Load form validation library
        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'username' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
            'cpass' => 'required|matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed
            echo view('signup_view', ['validation' => $validation]);
        } else {
            // Validation passed
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT)
            ];

            // Insert user data into database
            $userModel = new UserModel();
            $insert = $userModel->insert($data);

            if ($insert) {
                // Registration success
                session()->setFlashdata('success_msg', 'Registration successful. You can now log in.');
                return redirect()->to('user/login');
            } else {
                // Registration failed
                session()->setFlashdata('error_msg', 'Registration failed. Please try again.');
                echo view('users/index');
            }
        }
    }


    public function login()
    {
        return view('users_layouts/login');

    }
    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'logged_in' => true,
            ]);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
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