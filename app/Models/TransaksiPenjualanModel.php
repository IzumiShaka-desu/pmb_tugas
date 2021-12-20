<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiPenjualanModel extends Model
{
    public function getTransactionsList()
    {
        return $this->db->table('Transaksi_Penjualan')->getWhere([])->getResultArray();
    }
//    z
}
