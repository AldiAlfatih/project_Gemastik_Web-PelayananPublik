<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'created_at'];
    protected $useTimestamps = true;

    // Optionally, you can define validation rules
    protected $validationRules = [
        'username' => 'required|alpha_numeric_space|min_length[3]|is_unique[akun.username]',
        'email'    => 'required|valid_email|is_unique[akun.email]',
        'password' => 'required|min_length[6]'
    ];
}
