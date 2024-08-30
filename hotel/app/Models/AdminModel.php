<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    public function index()
    {
        echo view('admin_layouts/login');
    }

}