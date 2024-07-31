<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        // return view('admin/login');

    }
}

//     public function authenticate()
//     {
//         $session = session();
//         $model = new UserModel();

//         $username = $this->request->getVar('username');
//         $password = $this->request->getVar('password');

//         $data = $model->where('username', $username)->first();

//         if ($data) {
//             $cpass = $data['password'];
//             $verify_pass = password_verify($password, $cpass);
//             if ($verify_pass) {
//                 $ses_data = [
//                     'id' => $data['id'],
//                     'username' => $data['username'],
//                     'logged_in' => TRUE
//                 ];
//                 $session->set($ses_data);
//                 return redirect()->to('/dashboard');
//             } else {
//                 $session->setFlashdata('msg', 'Wrong Password');
//                 return redirect()->to('/admin/login');
//             }
//         } else {
//             $session->setFlashdata('msg', 'Username not found');
//             return redirect()->to('/admin/login');
//         }
//     }
// }
/* public function dashboard()
 {
     return view('admin/dashboard');

 }
}