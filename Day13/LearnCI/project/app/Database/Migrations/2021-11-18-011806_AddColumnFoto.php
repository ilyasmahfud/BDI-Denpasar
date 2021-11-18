<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnFoto extends Migration
{
    public function up()
    {
        $fields = [
            'foto' => ['type' => 'TEXT']
        ];
        $this->forge->addColumn('songs', $fields);
    }

    public function down()
    {
        //
    }
}
