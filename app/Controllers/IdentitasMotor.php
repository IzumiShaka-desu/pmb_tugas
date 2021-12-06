<?php

namespace App\Controllers;

use App\Models\IdentitasMotorModel;

class IdentitasMotor extends BaseController
{
    public function __construct()
    {
        $this->uModel = new IdentitasMotorModel();
    }

    public function index()
    {
        if (session()->get('user') == null) {
            return redirect()->to('/login');
        }
        $level = strtolower(session()->get('user')["level"]);
        if (!($level == "pemilik" || $level == "teller")) {
            return redirect()->to('/Home');
        }
        $data["identitas_motor"] = $this->uModel->getUserList();

        return view('identitasmotorView', $data);
    }
    public function createUser()
    {
        return view('tambahData');
    }
    public function editItem($id)
    {
        $data = ["item" => $this->uModel->getUserById($id)];
        return view('editDatam', $data);
    }
    public function create()
    {
        $data = [
            "NORegistrasi" => $this->request->getPost('noreg'),
            "NamaPemilik" => $this->request->getPost("NamaPemilik"),
            "Alamat" => $this->request->getPost("Alamat"),
            "NoRangka" => $this->request->getPost("NoRangka"),
            "NoMesin" => $this->request->getPost("NoMesin"),
            "PlatNO" => $this->request->getPost("PlatNO"),
            "Merk" => $this->request->getPost("Merk"),
            "Type" => $this->request->getPost("Type"),
            "Model" => $this->request->getPost("Model"),
            "TahunPembuatan" => $this->request->getPost("TahunPembuatan"),
            "IsiSilinder" => $this->request->getPost("IsiSilinder"),
            "BahanBakar" => $this->request->getPost("BahanBakar"),
            "WarnaTNKB" => $this->request->getPost("WarnaTNKB"),
            "TahunRegistrasi" => $this->request->getPost("TahunRegistrasi"),
            "NoBPKB" => $this->request->getPost("NoBPKB"),
            "KodeLokasi" => $this->request->getPost("KodeLokasi"),
            "MasaBerlakuSTNK" => $this->request->getPost("MasaBerlakuSTNK"),
        ];
        // echo var_dump($data);
        $this->uModel->addUser($data);
        return redirect()->to('/IdentitasMotor');
    }
    public function update($id)
    {
        $data = [
            "ID" => $id,
            "NORegistrasi" => $this->request->getPost('noreg'),
            "NamaPemilik" => $this->request->getPost("NamaPemilik"),
            "Alamat" => $this->request->getPost("Alamat"),
            "NoRangka" => $this->request->getPost("NoRangka"),
            "NoMesin" => $this->request->getPost("NoMesin"),
            "PlatNO" => $this->request->getPost("PlatNO"),
            "Merk" => $this->request->getPost("Merk"),
            "Type" => $this->request->getPost("Type"),
            "Model" => $this->request->getPost("Model"),
            "TahunPembuatan" => $this->request->getPost("TahunPembuatan"),
            "IsiSilinder" => $this->request->getPost("IsiSilinder"),
            "BahanBakar" => $this->request->getPost("BahanBakar"),
            "WarnaTNKB" => $this->request->getPost("WarnaTNKB"),
            "TahunRegistrasi" => $this->request->getPost("TahunRegistrasi"),
            "NoBPKB" => $this->request->getPost("NoBPKB"),
            "KodeLokasi" => $this->request->getPost("KodeLokasi"),
            "MasaBerlakuSTNK" => $this->request->getPost("MasaBerlakuSTNK"),
        ];
        // echo var_dump($data);
        $this->uModel->updateData($id, $data);
        return redirect()->to('/IdentitasMotor');
    }
    public function delete($id)
    {
        $this->uModel->deleteData($id);
        return redirect()->to('/IdentitasMotor');
    }
}
