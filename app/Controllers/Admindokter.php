<?php

namespace App\Controllers;

use App\Models\PoliklinikModel;
use App\Models\DokterModel;

class Admindokter extends BaseController
{
	protected $poliModel;
	protected $dokterModel;
	public function __construct()
	{
		$this->poliModel = new PoliklinikModel();
		$this->dokterModel = new DokterModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Lihat Antrian',
			'gabungan' => $this->dokterModel->getJoin()->getResult(),
		];
		return view('admin/a_dokter', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Tambah Data Dokter',
			'poliklinik' => $this->poliModel->getAllPoliklinik(),
		];
		//dd($data);
		return view('formAdm/add_dokter', $data);
	}

	public function save()
	{
		$this->dokterModel->save([
			'dokter' => $this->request->getVar('dokter'),
			'spesialis' => $this->request->getVar('spesialis'),
			'id_poliklinik' => $this->request->getVar('id_poliklinik'),
		]);

		return redirect()->to(base_url('/admin/dokter'));
	}

	public function delete($id)
	{
		$this->dokterModel->delete($id);

		return redirect()->to(base_url('/admin/dokter'));
	}

	public function ubah($id)
	{
		$data = [
			'title' => 'Form Ubah Data Dokter',
			'dokter' => $this->dokterModel->getDokterById($id),
			'poliklinik' => $this->poliModel->getAllPoliklinik(),
		];
		//dd($data);
		return view('/formAdm/edit_dokter', $data);
	}

	public function update($id)
	{
		$this->dokterModel->save([
			'id_dokter' => $id,
			'dokter' => $this->request->getVar('dokter'),
			'spesialis' => $this->request->getVar('spesialis'),
			'id_poliklinik' => $this->request->getVar('id_poliklinik'),
		]);

		return redirect()->to(base_url('/admin/dokter'));
	}
}
	//--------------------------------------------------------------------
