<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pasien extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pasien'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => TRUE
			],
			'nik' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_depan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_belakang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tempat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tl'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'gender' => [
				'type'           => 'VARCHAR',
				'constraint'     => '10',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'telp' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'pendidikan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'pekerjaan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'bpjs' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'id_user' => [
				'type'           => 'INT',
				'constraint'     => '11',
			],
		]);
		$this->forge->addKey('id_pasien', TRUE);
		$this->forge->createTable('pasien');
		$this->forge->addColumn('pasien', [
			'CONSTRAINT fk_id FOREIGN KEY(id_user) REFERENCES users(id)',
		]);
	}
	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
