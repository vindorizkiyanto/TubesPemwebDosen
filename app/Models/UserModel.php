<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'email', 'password'];

    function get_data_login($email)
    {
        $builder = $this->table('user');
        $builder->where('email', $email);
        $log = $builder->get()->getRow();
        return $log;
    }
}
