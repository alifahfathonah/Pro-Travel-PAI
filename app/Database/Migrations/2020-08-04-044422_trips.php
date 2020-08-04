<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Trips extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'trip_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'trip_nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'trip_desc'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'trip_foto' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('trip_id', true);
		$this->forge->createTable('trips');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('trips');
	}
}
