<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin_layouts/login');
    }

    public function dashboard()
    {
        return view('admin_layouts/dashboard');

    }
    public function login_ac()
    {
        helper(['form']);
        $mod_user = new AdminModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $mod_user->where('username', $username)->first();

        if ($data) {
            $pass_db = $data['password'];
            $ver_pass = password_verify($password, $pass_db);
            if ($ver_pass) {
                return redirect()->to('admin/dashboard');
            }

        } else {
            return redirect()->to('admin/index');

        }
    }
    public function data_table()
    {
        return view('admin_layouts/data');

    }
    public function rooms_availability()
    {
        return view('admin_layouts/rooms-available');
    }


}