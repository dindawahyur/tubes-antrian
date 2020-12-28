<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dokter extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_dokter'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => TRUE
			],
			'dokter'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'spesialis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'tentang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'id_poliklinik'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
		]);
		$this->forge->addKey('id_dokter', TRUE);
		$this->forge->createTable('dokter');
		$this->forge->addColumn('dokter', [
			'CONSTRAINT fk_id_poli FOREIGN KEY(id_poliklinik) REFERENCES poliklinik(id_poliklinik)',
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
