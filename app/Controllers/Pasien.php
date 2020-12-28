<?php

namespace App\Controllers;

use App\Models\PasienModel;

class Pasien extends BaseController
{
	protected $UsersModel;
	public function __construct()
	{
		$this->model = new PasienModel();
	}

	public function index()
	{
		session();
		$data = [
			'title' => 'Add Pasien',
			'validation' => \Config\Services::validation()
		];

		return view('pages/addPasien', $data);
	}

	public function save()
	{
		// //melakukan validasi
		if (!$this->validate([
			'nik' => [
				'rules' => 'is_unique[pasien.nik]',
				'errors' => [
					'is_unique' => '{field} sudah ada.',
				]
			],
			'email' => [
				'rules' => 'is_unique[pasien.email]',
				'errors' => [
					'is_unique' => '{field} sudah ada.',
				]
			],
		])) {
			$validation = \Config\Services::validation();
			//dd($validation);
			return redirect()->to(base_url('/pasien'))->withInput()->with('validation', $validation);
		}

		//dd($this->request->getVar());
		$session = session();

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

		return redirect()->to(base_url('/'));
	}
	//--------------------------------------------------------------------

}
