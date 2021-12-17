<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiPenjualan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'IdTrsk'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],

            'Harga_Jual' => [
                'type'           => 'INT',
                'constraint'     => 20,
            ],
            'Harga_Jual_real' => [
                'type'           => 'INT',
                'constraint'     => 20,
            ],
            'Tgl_Trsk datetime default current_timestamp',
            'Id_cust'           => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'Id_Kendaraan'           => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
        ]);
        $this->forge->addKey('IdTrsk', TRUE);
        $this->forge->addForeignKey('Id_cust', 'Customer', 'Id_Cust');
        $this->forge->addForeignKey('Id_Kendaraan', 'Identitas_Motor', 'ID');
        $this->forge->createTable('Transaksi_Penjualan');
        // , , , , , 
    }

    public function down()
    {
        //
    }
}
