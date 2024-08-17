<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{


    protected $table = 'users_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'created_at'];
    protected $useTimestamps = true;
}

