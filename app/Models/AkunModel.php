<?php

namespace App\Models;

use CodeIgniter\Model;

class AkunModel extends Model {
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'no_telepon'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}

class settingAkun extends Model {
    
}