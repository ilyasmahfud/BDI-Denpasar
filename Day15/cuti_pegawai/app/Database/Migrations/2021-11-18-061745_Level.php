<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Level extends Migration
{
    public function up()
    {
        $fieldLevel = [
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_level'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ]
        ];

        $this->forge->addField($fieldLevel);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('levels', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('levels');
    }
}
