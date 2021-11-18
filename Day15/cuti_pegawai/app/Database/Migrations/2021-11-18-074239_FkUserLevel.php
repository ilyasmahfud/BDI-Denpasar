<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FkUserLevel extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey("user_id","id");
    }

    public function down()
    {
        //
    }
}
