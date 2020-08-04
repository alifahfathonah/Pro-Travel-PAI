<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rent extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'rent_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'rent_nama_mobil'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'rent_driver'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'rent_fuel'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'rent_harga'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'rent_max_jam'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'rent_max_penumpang'       => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'rent_transmisi'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'rent_ac'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'rent_smoking'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'rent_foto' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('rent_id', true);
		$this->forge->createTable('rents');
	}

	public function down()
	{
		$this->forge->dropTable('rents');
	}
}
