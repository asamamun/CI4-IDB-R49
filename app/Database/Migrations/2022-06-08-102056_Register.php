<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Register extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'unique'     => true,
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint'     => 256,
            ],
            'is_active' => [
                'type' => 'enum',
                'constraint' => ['1', '0'],
                'default' => '1',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('register', true);
    }

    public function down()
    {
        $this->forge->dropTable('register');
    }
}
