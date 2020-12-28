<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'jadwal';
    //protected $allowedFields = ['nik', 'nama_depan', 'nama_belakang', 'tempat', 'tl', 'gender', 'email', 'telp', 'pendidikan', 'pekerjaan', 'bpjs', 'id_user'];

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
