<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_guru' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_guru' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_jabatan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'posisi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addKey('id_guru', true);
        $this->forge->addForeignKey('id_jabatan', 'jabatan', 'id_jabatan', 'CASCADE', 'CASCADE');
        $this->forge->createTable('guru');
    }
    public function down()
    {
        //
    }
}
