<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['nama_depan', 'nama_belakang', 'ttl', 'gender', 'email', 'telp', 'password', 'role'];

    // public function getAllMahasiswa()
    // {
    //     return $this->findAll();
    // }

    public function getUserByEmail($email)
    {
        return $this->where(['email' => $email])->first();
    }
}
