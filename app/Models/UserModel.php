<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users'; 

    protected $useTimestamps = true;

    protected $allowedFields = ['id_kanwil', 'email', 'number', 'username', 'fullname', 'user_image'];

    public function getUsers()
    {
        return $this->select('users.*, auth_groups.name as role_name, tb_kanwil.nama_kanwil')
                    ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
                    ->join('auth_groups', 'auth_groups_users.group_id = auth_groups.id')
                    ->join('tb_kanwil', 'users.id_kanwil = tb_kanwil.id_kanwil')
                    ->asObject()
                    ->findAll();
    }
}
