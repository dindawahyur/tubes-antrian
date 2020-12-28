<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $table = 'antrian';
    protected $allowedFields = ['id_pasien', 'id_jadwal', 'tgl_janji'];
    protected $primaryKey = 'id_antrian';
    protected $useTimestamps = true;

    // public function getAllMahasiswa()
    // {
    //     return $this->findAll();
    // }

    public function getPasienDariUser($id_user)
    {
        return $this->where(['id_user' => $id_user])->findAll();
    }
}