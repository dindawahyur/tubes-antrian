<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien';
    protected $allowedFields = ['nik', 'nama_depan', 'nama_belakang', 'tempat', 'tl', 'gender', 'email', 'telp', 'pendidikan', 'pekerjaan', 'bpjs', 'id_user'];
    protected $primaryKey = 'id_pasien';

    public function getAllPasien()
    {
        return $this->findAll();
    }

    public function getPasienById($id_pasien)
    {
        return $this->where(['id_pasien' => $id_pasien])->first();
    }

    public function getPasienDariUser($id_user)
    {
        return $this->where(['id_user' => $id_user])->findAll();
    }

    public function getRiwayat($id_user)
    {
        $db = \config\Database::connect();
        return $db->query('SELECT `antrian`.*, `jadwal`.*, `pasien`.*, `dokter`.`dokter`, `poliklinik`.`poli` from `antrian`, `pasien`,`jadwal`, `dokter`, `poliklinik` WHERE `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik` and `dokter`.`id_dokter`=`jadwal`.`id_dokter` and `jadwal`.`id_jadwal`=`antrian`.`id_jadwal` AND `pasien`.`id_pasien`=`antrian`.`id_pasien` AND `pasien`.`id_user`=' . $id_user);
    }

    public function getRiwayatByIdPasien($id_pasien)
    {
        $db = \config\Database::connect();
        return $db->query('SELECT * FROM `antrian` LEFT JOIN `pasien` ON `antrian`.`id_pasien`=`pasien`.`id_pasien` LEFT JOIN `jadwal` ON `antrian`.`id_jadwal`=`jadwal`.`id_jadwal` LEFT JOIN `dokter` ON `dokter`.`id_dokter`=`jadwal`.`id_dokter` LEFT JOIN `poliklinik` ON `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik` WHERE `antrian`.`id_pasien`=' . $id_pasien);
    }

    public function getLastData()
    {
        $db = \config\Database::connect();
        return $db->query(' SELECT id_pasien FROM `pasien` ORDER BY id_pasien DESC LIMIT 1');
    }
}
