<?php
namespace App\Controllers;
use App\Models\UserModels;

class userController extends BaseController
{
    public function __construct()
    {
        $this->uModel = new UserModels();
    }

    public function index(){
        $data["identitas_motor"] = $this->uModel->getUserList();
        
        return view('userView',$data);
    }
    public function createUser(){
        return view('tambahData');

    public function create()
    {
        $data = [
            "ID" => session()->get('identitas_motor'),
            "NORegistrasi" => session()->get('identitas_motor'),
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
        ]

        $this->uModel->addUser($data);
        return redirect()->to('/userController');
    }
}