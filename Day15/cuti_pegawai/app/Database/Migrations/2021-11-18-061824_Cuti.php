<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuti extends Migration
{
    public function up()
    {
        $fieldCuti = [
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'pegawai_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null' => false
            ],
            'jenis_cuti_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null' => false
            ],
            'tanggal_pengajuan'          => [
                'type'           => 'DATE',
                'null' => false
            ],
            'tanggal_mulai'          => [
                'type'           => 'DATE',
                'null' => false
            ],
            'tanggal_approval'          => [
                'type'           => 'DATE',
                'null' => false
            ],
            'tanggal_selesai'          => [
                'type'           => 'DATE',
                'null' => false
            ],
            'keterangan'          => [
                'type'           => 'TEXT',
                'null' => false
            ],
            'bukti'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ],
            'STATUS'          => [
                'type'           => 'ENUM',
                'constraint'     => ["0","1"],
                'null' => false
            ],
        ];

        $this->forge->addField($fieldCuti);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('cutis', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('cutis');
    }
}
