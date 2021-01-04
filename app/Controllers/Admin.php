<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\AntrianModel;
use App\Models\PasienModel;
use App\Models\PoliklinikModel;
use App\Models\DokterModel;
use App\Models\JadwalModel;

class Admin extends BaseController
{
	protected $model;
	protected $poliModel;
	protected $dokterModel;
	protected $jadwalModel;
	protected $antrianModel;
	protected $usersModel;
	public function __construct()
	{
		$this->model = new PasienModel();
		$this->poliModel = new PoliklinikModel();
		$this->dokterModel = new DokterModel();
		$this->jadwalModel = new JadwalModel();
		$this->antrianModel = new AntrianModel();
		$this->usersModel = new UsersModel();
	}

	public function index()
	{
		date_default_timezone_set('Europe/Riga');
		$today = date("Y-m-d");
		$bantu = $this->antrianModel->getCountAntrian($today)->getResult();

		$data = [
			'title' => "Admin",
			'antrian' => $this->antrianModel->getAntrianByTanggal($today)->getResult(),
			'jumlah' => $bantu[0]->jumlah,
			'today' => $today,
		];
		//dd($data);
		return view('admin/a_index', $data);
	}

	public function antrian()
	{
		$data = [
			'title' => 'Lihat Antrian',
			'poliklinik' => $this->poliModel->getAllPoliklinik(),
			'antrian' => $this->antrianModel->getAntrian()->getResult(),
			// 'dokter' => $this->dokterModel->getAllDokter(),
			// 'jadwal' => $this->jadwalModel->getAllJadwal(),
			// 'gabungan' => $this->dokterModel->getJoin()->getResult(),
			// 'jam' => $this->dokterModel->getJam()->getResult(),
		];
		return view('admin/a_antrian', $data);
	}

	public function pasien()
	{
		$data = [
			'title' => 'Pasien Rumah Sakit',
			'pasien' => $this->model->getAllPasien(),
		];
		return view('admin/a_pasien', $data);
	}

	public function detailPasien($id)
	{
		$data = [
			'title' => 'Detail Pasien Rumah Sakit',
			'pasien' => $this->model->getPasienById($id),
			'riwayat' => $this->model->getRiwayatByIdPasien($id)->getResult(),
		];
		return view('admin/a_detailPasien', $data);
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/login'));
	}
}
	//--------------------------------------------------------------------
