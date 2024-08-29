<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'created_at'];
    protected $useTimestamps = true;

    public function __construct()
    {
        // Loading db instance
        $this->db = db_connect();
    }

    public function insert_user($details)
    {
        //Add my case
        $builder = $this->db->table('users_info');
        return $builder->insert($details) ? true : false;
    }
}

