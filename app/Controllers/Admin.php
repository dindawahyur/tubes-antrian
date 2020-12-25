<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
	protected $UsersModel;
	public function __construct()
	{
		$this->model = new UsersModel();
	}

	public function index()
	{
		return view('admin/a_index');
	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/login'));
	}
}
	//--------------------------------------------------------------------
