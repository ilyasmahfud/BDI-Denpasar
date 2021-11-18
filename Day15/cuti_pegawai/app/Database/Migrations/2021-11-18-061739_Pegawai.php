<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $fieldPegawai = [
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ],
            'jk'          => [
                'type'           => 'ENUM',
                'constraint'     => ['L', 'P'],
                'null' => true
            ],
            'alamat'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ],
            'telepon'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ],
            'email'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
                'null' => false
            ],
        ];

        $this->forge->addField($fieldPegawai);
        $this->forge->addKey('id', TRUE);
        $this->forge->addUniqueKey('email');
        $this->forge->createTable('pegawais', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('pegawais');
    }
}
