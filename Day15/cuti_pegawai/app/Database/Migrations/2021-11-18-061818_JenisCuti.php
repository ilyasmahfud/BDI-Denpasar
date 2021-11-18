<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisCuti extends Migration
{
    public function up()
    {
        $fieldJenisCuti = [
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_jenis'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ]
        ];

        $this->forge->addField($fieldJenisCuti);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('jenis_cutis', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jenis_cutis');
    }
}
