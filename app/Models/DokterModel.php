<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'dokter';
    protected $allowedFields = ['dokter', 'spesialis', 'id_poliklinik'];
    protected $primaryKey = 'id_dokter';

    public function getAllDokter()
    {
        return $this->findAll();
    }

    public function getDokterById($id_dokter)
    {
        return $this->where(['id_dokter' => $id_dokter])->first();
    }

    public function getDokterByPoli($id_poliklinik)
    {
        return $this->where(['id_poliklinik' => $id_poliklinik])->findAll();
    }

    public function getJoin()
    {
        $db = \config\Database::connect();
        //return $db->query('SELECT `dokter`.*, `poliklinik`.*, `jadwal`.* from dokter, poliklinik, jadwal where `dokter`.`id_poliklinik`=`poliklinik`.`id_poliklinik` AND `dokter`.`id_dokter`=`jadwal`.`id_dokter`');
        return $db->query('SELECT * from `poliklinik` RIGHT JOIN `dokter` ON `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik`');
    }

    public function getJam()
    {
        $db = \config\Database::connect();
        return $db->query('SELECT * from `poliklinik` RIGHT JOIN `dokter` ON `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik`RIGHT JOIN `jadwal`ON `dokter`.`id_dokter`=`jadwal`.`id_dokter`');
    }

    public function getDetail($id_jadwal)
    {
        $db = \config\Database::connect();
        return $db->query('SELECT * from `poliklinik` RIGHT JOIN `dokter` ON `poliklinik`.`id_poliklinik`=`dokter`.`id_poliklinik`RIGHT JOIN `jadwal`ON `dokter`.`id_dokter`=`jadwal`.`id_dokter` where `jadwal`.`id_jadwal` = ' . $id_jadwal);
    }
}
