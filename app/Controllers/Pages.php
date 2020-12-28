<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PasienModel;
use App\Models\PoliklinikModel;
use App\Models\DokterModel;
use App\Models\JadwalModel;

class Pages extends BaseController
{
	protected $model;
	protected $poliModel;
	protected $dokterModel;
	protected $jadwalModel;
	protected $antrianModel;

	public function __construct()
	{
		$this->model = new PasienModel();
		$this->poliModel = new PoliklinikModel();
		$this->dokterModel = new DokterModel();
		$this->jadwalModel = new JadwalModel();
		$this->antrianModel = new AntrianModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Ini Index rumah sakitnya guys'
		];
		return view('pages/beranda', $data);
	}

	public function kontak()
	{
		$data = [
			'title' => 'Kontak'
		];
		return view('pages/kontak', $data);
	}

	public function pendaftaran()
	{
		$session = session();
		$data = [
			'title' => 'Pendaftaran Pasien',
			//'adaPasien' => $this->model->getPasienDariUser($session->get('user_id')),
			'poliklinik' => $this->poliModel->getAllPoliklinik(),
			'dokter' => $this->dokterModel->getAllDokter(),
			'jadwal' => $this->jadwalModel->getAllJadwal(),
			'gabungan' => $this->dokterModel->getJoin()->getResult(),
			'jam' => $this->dokterModel->getJam()->getResult(),
		];

		//echo "Welcome back, " . $session->get('user_name');

		return view('pages/pendaftaran', $data);
	}

	public function cek()
	{
		$session = session();
		$id_jadwal = $this->request->getVar('jadwal');
		//cek penuh atau engga nya harusnya disini
		$data = [
			'title' => 'Pendaftaran Tahap 2',
			//'jam' => $this->dokterModel->getJam()->getResult(),
			'pilih' => $this->dokterModel->getDetail($id_jadwal)->getResult(),
			'dataPasien' => $this->model->getPasienDariUser($session->get('user_id')),
			'validation' => \Config\Services::validation(),
		];

		//$ses_idJadwal = $session->id_jadwal;
		// $session->set($id_jadwal);
		// echo "Welcome back, " . $session->get($id_jadwal);

		//dd($data);
		return view('antrian/coba', $data);
	}

	public function antrian()
	{
		//dd($this->request->getVar());
		$this->antrianModel->save([
			'id_pasien' => $this->request->getVar('pasien'),
			'id_jadwal' => $this->request->getVar('jadwal'),
			'tgl_janji' => $this->request->getVar('tanggal'),
		]);

		return redirect()->to(base_url('/riwayat'));
	}

	public function PsAntrian()
	{
		$session = session();
		//dd($this->request->getVar());
		$this->model->save([
			'nik' => $this->request->getVar('nik'),
			'nama_depan' => $this->request->getVar('nama_depan'),
			'nama_belakang' => $this->request->getVar('nama_belakang'),
			'tempat' => $this->request->getVar('tempat'),
			'tl' => $this->request->getVar('tl'),
			'gender' => $this->request->getVar('gender'),
			'email' => $this->request->getVar('email'),
			'telp' => $this->request->getVar('telp'),
			'pendidikan' => $this->request->getVar('pendidikan'),
			'pekerjaan' => $this->request->getVar('pekerjaan'),
			'bpjs' => $this->request->getVar('bpjs'),
			'id_user' => $session->get('user_id'),
		]);

		//ambil id data terakhir dulu nanti harusnya pake trigger, iya nanti yaa
		$id_pasien = $this->model->getLastData()->getResult();
		//dd($id_pasien);

		$this->antrianModel->save([
			'id_pasien' => $id_pasien[0]->id_pasien,
			'id_jadwal' => $this->request->getVar('jadwal'),
			'tgl_janji' => $this->request->getVar('tanggal'),
		]);

		return redirect()->to(base_url('/riwayat'));
	}

	public function riwayat()
	{
		$session = session();
		$data = [
			'title' => 'Riwayat Pengobatan',
			'riwayat' => $this->model->getRiwayat($session->get('user_id'))->getResult(),
		];
		//dd($data);
		return view('pages/riwayat', $data);
	}
	//--------------------------------------------------------------------

}
