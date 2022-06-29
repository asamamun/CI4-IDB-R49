<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todo extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '512',
            ],
            'done' => [
                'type'       => 'boolean',
                'default' => true,
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
        $this->forge->createTable('todos', true);
    }

    public function down()
    {
        $this->forge->dropTable('todos');
    }
}
