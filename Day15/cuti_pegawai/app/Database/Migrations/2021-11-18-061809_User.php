<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $fieldUser = [
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'username'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ],
            'password'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
                'null' => false
            ],
            'pegawai_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null' => false
            ],
            'level_active'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'null' => false
            ],
        ];

        $this->forge->addField($fieldUser);
        $this->forge->addKey('id', TRUE);
        $this->forge->addUniqueKey('username');
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
