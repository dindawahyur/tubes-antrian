<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PasienModel;
use App\Models\PoliklinikModel;
use App\Models\DokterModel;
use App\Models\JadwalModel;
use App\Models\UsersModel;

class Pages extends BaseController
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
		$tgl_janji = $this->request->getVar('tanggal');
		$cekPenuh = $this->antrianModel->getCountAntrian($tgl_janji)->getResult();

		$session = session();
		if ($cekPenuh[0]->jumlah == "1") {

			//set session
			$_SESSION['penuh'] = 'Maaf, Tanggal yang dipilih sudah penuh';
			$session->markAsFlashdata('penuh');

			//return view('pages/pendaftaran');
			return redirect()->to(base_url('/pendaftaran'));
		} else {
			$this->antrianModel->save([
				'id_pasien' => $this->request->getVar('pasien'),
				'id_jadwal' => $this->request->getVar('jadwal'),
				'tgl_janji' => $this->request->getVar('tanggal'),
			]);

			$email_smtp = \Config\Services::email();

			$email_smtp->setFrom("dindawahyu@cehiji.com", "Administrasi Rumah Sakit");
			$email_smtp->setTo($session->get('user_email'));

			$email_smtp->setSubject("Antrian Rumah Sakit");
			$email_smtp->setMessage("Yth. " . $session->get('user_name') .
				" antrian yang dibuat untuk tanggal " .
				$this->request->getVar('tanggal') . " berhasil");

			$email_smtp->send();

			return redirect()->to(base_url('/riwayat'));
		}
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

		$tgl_janji = $this->request->getVar('tanggal');
		$cekPenuh = $this->antrianModel->getCountAntrian($tgl_janji)->getResult();

		if ($cekPenuh[0]->jumlah == "1") {

			//set session
			$session = session();
			$_SESSION['penuh'] = 'Maaf, Tanggal yang dipilih sudah penuh';
			$session->markAsFlashdata('penuh');

			//return view('pages/pendaftaran');
			return redirect()->to(base_url('/pendaftaran'));
		} else {

			//ambil id data terakhir dulu nanti harusnya pake trigger, iya nanti yaa
			$id_pasien = $this->model->getLastData()->getResult();
			//dd($id_pasien);

			$this->antrianModel->save([
				'id_pasien' => $id_pasien[0]->id_pasien,
				'id_jadwal' => $this->request->getVar('jadwal'),
				'tgl_janji' => $this->request->getVar('tanggal'),
			]);

			$email_smtp = \Config\Services::email();

			$email_smtp->setFrom("dindawahyu@cehiji.com", "Administrasi Rumah Sakit");
			$email_smtp->setTo($session->get('user_email'));

			$email_smtp->setSubject("Antrian Rumah Sakit");
			$email_smtp->setMessage("Yth. " . $session->get('user_name') .
				" antrian yang di buat untuk tanggal " .
				$this->request->getVar('tanggal') . " berhasil");

			$email_smtp->send();

			return redirect()->to(base_url('/riwayat'));
		}
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

	public function konfirmasi()
	{
		//ini buat latihan
		$email_smtp = \Config\Services::email();

		$email_smtp->setFrom("dindawahyu@cehiji.com", "Rumkit Server");
		$email_smtp->setTo("dwrahmadani@gmail.com");

		$email_smtp->setSubject("Ini subjectnya");
		$email_smtp->setMessage("Ini isi/body email");


		$email_smtp->send();
		echo ("email");
	}
	//--------------------------------------------------------------------

	public function poliklinik()
	{
		$data = [
			'title' => "Polilinik",
			'poliklinik' => $this->poliModel->getAllPoliklinik(),
		];

		//ada dua, searchPoli dibikin manual
		//data poli ngambil dari db
		return view("pages/searchPoli", $data);
	}

	public function detailPoli($id_poli)
	{
		$data = [
			'title' => "Informasi Poliklinik",
			'poli' => $this->poliModel->getPoliklinikById($id_poli)
		];

		return view("pages/infoPoli", $data);
	}

	public function covid()
	{
		$data = [
			'title' => "Informasi Covid 19"
		];

		return view("pages/infoCovid", $data);
	}

	public function profil()
	{
		$session = session();
		$data = [
			'title' => "Profile",
			'user' => $this->usersModel->getUserByEmail($session->get('user_email')),
		];

		return view("pages/profile", $data);
	}

	public function bantuan()
	{
		$data = [
			'title' => "Bantuan",
		];

		return view("pages/bantuan", $data);
	}
}
