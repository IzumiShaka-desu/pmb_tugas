<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IDUser'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'Nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],
            'Password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'Hak_Akses'      => [
                'type'           => 'ENUM',
                'constraint'     => ['Customer', 'Teknisi', 'Teller', 'Pemilik'],
                'default'        => 'Customer',
            ],
            'Manager' => [
                'type' => "VARCHAR",
                'constraint' => 50,
            ],
            'Create_Date datetime default current_timestamp',
        ]);
        $this->forge->addKey('IDUser', TRUE);
        $this->forge->createTable('User');
    }

    public function down()
    {
        //
    }
}
