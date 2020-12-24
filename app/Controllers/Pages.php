<?php

namespace App\Controllers;

class Pages extends BaseController
{
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
		$data = [
			'title' => 'Pendaftaran Pasien'
		];

		return view('pages/pendaftaran', $data);
	}
	//--------------------------------------------------------------------

}