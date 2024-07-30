<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_login';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
}