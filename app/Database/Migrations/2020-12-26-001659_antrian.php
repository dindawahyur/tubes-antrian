<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Antrian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_antrian'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => TRUE
			],
			'id_pasien'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'id_jadwal'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'tgl_janji'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '30',
			],
			'created_at'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'updated_at'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

		]);
		$this->forge->addKey('id_antrian', TRUE);
		$this->forge->createTable('antrian');
		$this->forge->addColumn('antrian', [
			'CONSTRAINT fk_id_pasien FOREIGN KEY(id_pasien) REFERENCES pasien(id_pasien)',
		]);
		$this->forge->addColumn('antrian', [
			'CONSTRAINT fk_id_jadwal FOREIGN KEY(id_jadwal) REFERENCES jadwal(id_jadwal)',
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
