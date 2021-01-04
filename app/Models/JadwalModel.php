<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $allowedFields = ['jam', 'kuota', 'id_dokter'];
    protected $primaryKey = 'id_jadwal';


    public function getAllJadwal()
    {
        return $this->findAll();
    }

    public function getJadwalByDokter($id_dokter)
    {
        return $this->where(['id_dokter' => $id_dokter])->findAll();
    }

    public function getJadwalById($id_jadwal)
    {
        return $this->where(['id_jadwal' => $id_jadwal])->First();
    }
}
