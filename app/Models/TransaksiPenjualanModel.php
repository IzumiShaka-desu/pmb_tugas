<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiPenjualanModel extends Model
{
    public function getTransactionsList()
    {
        $query = "SELECT Transaksi_Penjualan.*,Customer.*,Identitas_Motor.* FROM `Transaksi_Penjualan` INNER JOIN Customer on Customer.Id_Cust=Transaksi_Penjualan.Id_cust INNER JOIN Identitas_Motor on Transaksi_Penjualan.Id_Kendaraan=Identitas_Motor.ID";
        return $this->db->query($query)->getResultArray();
    }
    //   
}
