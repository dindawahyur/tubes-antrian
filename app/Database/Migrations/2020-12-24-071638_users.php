<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => TRUE
			],
			'nama_depan'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'nama_belakang'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'ttl'       => [
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
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'role' => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
