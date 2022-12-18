<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'email_verified_at' => [
				'type'    => 'TIMESTAMP',
        		'default' => new RawSql('CURRENT_TIMESTAMP'),
			],
            'token' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
				'null'           => true,
			],
            'level' => [
				'type'           => 'tinyint',
				'constraint'     => '4',
				'null'           => true,
			],
			'created_at' => [
				'type'    => 'TIMESTAMP',
        		'default' => new RawSql('CURRENT_TIMESTAMP'),
			],
			'updated_at' => [
				'type'    => 'TIMESTAMP',
        		'default' => new RawSql('CURRENT_TIMESTAMP'),
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
