<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IdentitasMotor extends Migration
{
    public $defaultGroup = 'default';

    public function up()
    {

        $this->forge->addField([
            'ID'           => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'NoRegistrasi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ], 'NamaPemilik'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],
            'Alamat'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ], 'NoRangka'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],


            'NoMesin' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'PlatNO' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'Merk' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'Type' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'Model' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'TahunPembuatan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'IsiSilinder' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'BahanBakar' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'WarnaTNKB' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'TahunRegistrasi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'NoBPKB' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'KodeLokasi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
            ],

            'MasaBerlakuSTNK' => [
                'type' => 'date',
            ],
            'Gambar_Motor' => ['type' => 'VARCHAR', 'constraint' => '60',],
            'Tgl_Beli' => ['type' => 'date'],
            'Harga_Beli' => [
                'type'           => 'INT',
                'constraint'     => 20,
            ],
            'Tgl_Jual' => ['type' => 'date',],
            'Harga_Jual' => [
                'type'           => 'INT',
                'constraint'     => 20,
            ],
            // 'Create_Date datetime default current_timestamp',
        ]);
        $this->forge->addKey('ID', TRUE);
        $this->forge->createTable('Identitas_Motor');
    }

    public function down()
    {
        //
    }
}
