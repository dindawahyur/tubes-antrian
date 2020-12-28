<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_jadwal'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => TRUE
			],
			'hari'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'jam'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'kuota'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'id_dokter'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
		]);
		$this->forge->addKey('id_jadwal', TRUE);
		$this->forge->createTable('jadwal');
		$this->forge->addColumn('jadwal', [
			'CONSTRAINT fk_id_dokter FOREIGN KEY(id_dokter) REFERENCES dokter(id_dokter)',
		]);
	}
	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
