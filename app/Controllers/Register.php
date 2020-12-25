<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
	protected $UsersModel;
	public function __construct()
	{
		$this->model = new UsersModel();
	}

	public function index()
	{
		session();
		$data = [
			'title' => 'Register',
			'validation' => \Config\Services::validation()
		];

		return view('auth/register', $data);
	}

	public function save()
	{
		// //melakukan validasi
		if (!$this->validate([
			'email' => [
				'rules' => 'is_unique[users.email]',
				'errors' => [
					'is_unique' => '{field} sudah ada.',
				]
			],
			'password' => [
				'rules' => 'min_length[8]',
				'errors' => [
					'min_length' => '{field} minimal 8 karakter.'
				]
			],
		])) {
			$validation = \Config\Services::validation();
			//dd($validation);
			return redirect()->to(base_url('/register'))->withInput()->with('validation', $validation);
		}

		//dd($this->request->getVar());
		$this->model->save([
			'nama_depan' => $this->request->getVar('nama_depan'),
			'nama_belakang' => $this->request->getVar('nama_belakang'),
			'ttl' => $this->request->getVar('ttl'),
			'gender' => $this->request->getVar('gender'),
			'email' => $this->request->getVar('email'),
			'telp' => $this->request->getVar('telp'),
			'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
			'role' => 3
		]);

		return redirect()->to(base_url('/login'));
	}
	//--------------------------------------------------------------------

}
