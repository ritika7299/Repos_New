<?php

namespace App\Controllers;
use App\Models\UserModel;


class User extends BaseController
{
    public $helpers = ['form'];
    public function index()
    {
        echo view('users_layouts/login');
    }
    public function register()
    {
        echo view('users_layouts/register');
    }

    public function store()
    {
        // Start the session
        session();

        // Load the form helper
        helper('form');

        // Get the validation service
        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'confirm password' => 'required|matches[password]'
        ]);

        // Check if validation fails
        if (!$validation->withRequest($this->request)->run()) {
            // Return to the registration form with validation errors
            return view('users_layouts/register', ['validation' => $validation]);
        }

        // Get the password from the request
        $password = $this->request->getPost('password');
        $cpass = $this->request->getPost('confirm password');
        if (empty($password) || empty($cpass)) {
            return view('user/register', ['validation' => $validation, 'error' => 'Password or confirm password is not received']);
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if (!$hashedPassword) {
            return view('user/register', ['validation' => $validation, 'error' => 'Password hashing failed']);
        }

        // Create a new instance of the UserModel
        $userModel = new UserModel();

        // Save the user data, including the hashed password
        $userModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $hashedPassword
        ]);

        // Store user data in session
        session()->set([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ]);

        // Set flash data for success message
        session()->setFlashdata('success', '<i class="fa fa-check"></i> Signup successfully');

        // Redirect to the registration page with a success message
        return redirect()->to('user/register');
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