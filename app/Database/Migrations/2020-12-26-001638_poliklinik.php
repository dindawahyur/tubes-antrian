<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Poliklinik extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_poliklinik'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => TRUE
			],
			'poli'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'deskripsi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('id_poliklinik', TRUE);
		$this->forge->createTable('poliklinik');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
