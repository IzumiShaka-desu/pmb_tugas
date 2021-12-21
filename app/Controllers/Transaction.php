<?php

namespace App\Controllers;

use App\Models\TransaksiPenjualanModel;

class Transaction extends BaseController
{
    public function __construct()
    {
        $this->uModel = new TransaksiPenjualanModel();
    }

    public function index()
    {
        if (session()->get('user') == null) {
            return redirect()->to('/login');
        }

        $data["transaksi_motor"] = $this->uModel->getTransactionsList();
        echo view('header');
        echo view('transaksiView', $data);
        echo view('footer');
        // return view('welcome_message');
    }
}
