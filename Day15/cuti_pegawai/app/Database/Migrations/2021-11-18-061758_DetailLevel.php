<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailLevel extends Migration
{
    public function up()
    {
        $fieldDetailLevel = [
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'user_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null' => false
            ],
            'level_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null' => false
            ],
        ];

        $this->forge->addField($fieldDetailLevel);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('detail_levels', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('detail_levels');
    }
}
