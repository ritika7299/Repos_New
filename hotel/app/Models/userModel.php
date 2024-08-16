<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    public function insert_user($data)
    {
        return $this->db->insert('users', $data);
    }
}
// protected $table = 'users';
// protected $primaryKey = 'id';
// protected $useAutoIncrement = true;
// protected $returType = 'object';
// protected $useSoftDeletes = true;
// protected $allowedFields = ['username', 'email', 'password', 'created_at', 'updated_at'];
// protected $useTimestamps = false;
// protected $createdField = 'created_at';
// protected $updatedField = 'updated_at';

// protected $validationRules = [];
// protected $validationMessages = [];
// protected $skipValidation = false;
