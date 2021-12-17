<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id_Cust'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'Nama_Cust'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],
            'Alamat_Cust'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'NIK_Cust'      => [
                'type' => "VARCHAR",
                'constraint' => 50,
            ],
            'Telp_Cust' => [
                'type' => "VARCHAR",
                'constraint' => 50,
            ],
        ]);
        $this->forge->addKey('Id_Cust', TRUE);
        $this->forge->createTable('Customer');
    }

    public function down()
    {
        //
    }
}
// , , , , ,