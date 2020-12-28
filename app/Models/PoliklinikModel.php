<?php

namespace App\Models;

use CodeIgniter\Model;

class PoliklinikModel extends Model
{
    protected $table = 'poliklinik';
    //protected $allowedFields = ['nik', 'nama_depan', 'nama_belakang', 'tempat', 'tl', 'gender', 'email', 'telp', 'pendidikan', 'pekerjaan', 'bpjs', 'id_user'];

    public function getAllPoliklinik()
    {
        return $this->findAll();
    }

    // public function getPasienDariUser($id_user)
    // {
    //     return $this->where(['id_user' => $id_user])->findAll();
    // }
}
