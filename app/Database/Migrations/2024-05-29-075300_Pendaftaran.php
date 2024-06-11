<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pendaftaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=> ["type"=> "INT","auto_increment"=> true],
            "nama" => ["type"=> "varchar","constraint"=> 100],
            "email" => ["type"=> "varchar","constraint"=> 100],
            "no_telpon" => ["type"=> "varchar","constraint"=> 20],
            "jenis_kelamin" => ["type"=> "varchar","constraint"=> 10],
            "bahasa" => ["type"=> "varchar","constraint"=> 1024],
            "agama" => ["type"=> "varchar","constraint"=> 20],
            "tanggal_daftar" => ["type"=> "date","null"=> false],
            "jam_daftar" => ["type"=> "time","null"=> false],
        ]);
        $this->forge->addKey("id");
        $this->forge->createTable("pendaftaran");
    }

    public function down()
    {
        $this->forge->dropTable("pendaftaran");
    }
}
