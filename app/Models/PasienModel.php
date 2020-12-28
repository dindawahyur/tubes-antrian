<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien';
    protected $allowedFields = ['nik', 'nama_depan', 'nama_belakang', 'tempat', 'tl', 'gender', 'email', 'telp', 'pendidikan', 'pekerjaan', 'bpjs', 'id_user'];
    protected $primaryKey = 'id_pasien';

    // public function getAllMahasiswa()
    // {
    //     return $this->findAll();
    // }

    public function getPasienDariUser($id_user)
    {
        return $this->where(['id_user' => $id_user])->findAll();
    }

    public function getRiwayat($id_user)
    {
        $db = \config\Database::connect();
        return $db->query('SELECT `antrian`.*, `jadwal`.*, `pasien`.*, `dokter`.`dokter`, `poliklinik`.`poli` from `antrian`, `pasien`,`jadwal`, `dokter`, `poliklinik` WHERE `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik` and `dokter`.`id_dokter`=`jadwal`.`id_dokter` and `jadwal`.`id_jadwal`=`antrian`.`id_jadwal` AND `pasien`.`id_pasien`=`antrian`.`id_pasien` AND `pasien`.`id_user`=' . $id_user);
    }

    public function getLastData()
    {
        $db = \config\Database::connect();
        return $db->query(' SELECT id_pasien FROM `pasien` ORDER BY id_pasien DESC LIMIT 1');
    }
}
