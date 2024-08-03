<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/login');

    }
    public function admin_dashboard()
    {
        return view('admin/dashboard');

    }
    public function login_action()
    {
        $modal = new AdminModel();
        $result = $modal->where('username', $this->request->getVar('username'))->first();

        if ($result != null) {
            if ($result['password'] == $this->request->getVar('password'))
                ; {
                echo "<h1>Welcome." . $result['name'];
            }



        } else {
            return view('admin/login');
        }

    }

}

