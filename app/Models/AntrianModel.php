<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $table = 'antrian';
    protected $allowedFields = ['id_pasien', 'id_jadwal', 'tgl_janji'];
    protected $primaryKey = 'id_antrian';
    protected $useTimestamps = true;

    public function getAntrian()
    {
        $db = \config\Database::connect();
        return $db->query('SELECT * from `poliklinik` RIGHT JOIN `dokter` ON `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik`RIGHT JOIN `jadwal`ON `dokter`.`id_dokter`=`jadwal`.`id_dokter` RIGHT JOIN `antrian` ON `jadwal`.`id_jadwal`=`antrian`.`id_jadwal` LEFT JOIN `pasien` ON `antrian`.`id_pasien`=`pasien`.`id_pasien`');
    }

    public function getPasienDariUser($id_user)
    {
        return $this->where(['id_user' => $id_user])->findAll();
    }

    public function getCountAntrian($tanggal)
    {
        $db = \config\Database::connect();
        return $db->query('SELECT Count(*) as jumlah from `antrian` where tgl_janji="' . $tanggal . '"');
    }

    public function getAntrianByTanggal($tanggal)
    {
        $db = \config\Database::connect();
        return $db->query('SELECT * from `poliklinik` RIGHT JOIN `dokter` ON `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik`RIGHT JOIN `jadwal`ON `dokter`.`id_dokter`=`jadwal`.`id_dokter` RIGHT JOIN `antrian` ON `jadwal`.`id_jadwal`=`antrian`.`id_jadwal` LEFT JOIN `pasien` ON `antrian`.`id_pasien`=`pasien`.`id_pasien` where `antrian`.`tgl_janji` = "' . $tanggal . '"');
    }
}
