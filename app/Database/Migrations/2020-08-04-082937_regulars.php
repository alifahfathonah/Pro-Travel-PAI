<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Regulars extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'regular_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'relugar_kode'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'relugar_nama_paket' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'relugar_include' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'relugar_exclude'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'relugar_rute'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'relugar_trip_array'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'relugar_harga'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'relugar_desc'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'relugar_foto'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
		]);
		$this->forge->addKey('regular_id', true);
		$this->forge->createTable('regulars');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('regulars');
	}
}
