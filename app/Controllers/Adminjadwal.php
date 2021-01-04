<?php

namespace App\Controllers;

use App\Models\DokterModel;
use App\Models\JadwalModel;

class Adminjadwal extends BaseController
{
	protected $dokterModel;
	protected $jadwalModel;
	public function __construct()
	{
		$this->dokterModel = new DokterModel();
		$this->jadwalModel = new JadwalModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Lihat Jadwal',
			'jam' => $this->dokterModel->getJam()->getResult(),
		];
		return view('admin/a_jadwal', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Dokter',
			'dokter' => $this->dokterModel->getAllDokter(),
		];
		//dd($data);
		return view('formAdm/add_jadwal', $data);
	}

	public function save()
	{
		$this->jadwalModel->save([
			'jam' => $this->request->getVar('jam'),
			'kuota' => $this->request->getVar('kuota'),
			'id_dokter' => $this->request->getVar('id_dokter'),
		]);

		return redirect()->to(base_url('/admin/jadwal'));
	}

	public function delete($id)
	{
		$this->jadwalModel->delete($id);

		return redirect()->to(base_url('/admin/jadwal'));
	}

	public function ubah($id)
	{
		$data = [
			'title' => 'Form Ubah Data Jadwal',
			'jadwal' => $this->jadwalModel->getJadwalById($id),
			'dokter' => $this->dokterModel->getAllDokter(),
		];
		//dd($data);
		return view('/formAdm/edit_jadwal', $data);
	}

	public function update($id)
	{
		$this->jadwalModel->save([
			'id_jadwal' => $id,
			'jam' => $this->request->getVar('jam'),
			'kuota' => $this->request->getVar('kuota'),
			'id_dokter' => $this->request->getVar('id_dokter'),
		]);

		return redirect()->to(base_url('/admin/jadwal'));
	}
}
	//--------------------------------------------------------------------
