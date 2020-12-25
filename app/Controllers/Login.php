<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
	protected $UsersModel;
	public function __construct()
	{
		$this->model = new UsersModel();
	}

	public function index()
	{
		return view('auth/login');
	}

	public function auth()
	{
		$session = session();
		//ngambil data dari form login
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');

		//ngambil data dari db
		$data = $this->model->getUserByEmail($email);

		if ($data) {
			$pass = $data['password'];
			$verify_pass = password_verify($password, $pass);

			if ($verify_pass) {
				$ses_data = [
					'user_id'       => $data['id'],
					'user_name'     => $data['nama_depan'],
					'user_email'    => $data['email'],
					'role'    		=> $data['role'],
					'logged_in'     => TRUE
				];
				$session->set($ses_data);

				$cek = $session->get('role');
				if ($cek == 1) {
					//admin
					return redirect()->to(base_url('admin/'));
				} else if ($cek == 2) {
					//perawat
				} else {
					//user
					return redirect()->to(base_url('/'));
				}
			} else {
				$session->setFlashdata('msg', 'Email dan Password Tidak Sesuai');
				return redirect()->to(base_url('/login'));
			}
		} else {
			$session->setFlashdata('msg', 'Email Tidak Ditemukan');
			return redirect()->to(base_url('/login'));
		}
	}


	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}
	//--------------------------------------------------------------------
