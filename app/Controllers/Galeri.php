<?php

namespace App\Controllers;

use App\Models\IdentitasMotorModel;

class Galeri extends BaseController
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
        echo view('header');
        $data["identitas_motor"] = $this->uModel->getUserList();
        /*for($x = 0; $x <= 10; $x++){
            array_push($data["identitas_motor"], $data["identitas_motor"][0] );

        }*/           
        
        echo view('GaleriMotorView',$data);
        echo view('footer');
        // return view('welcome_message');
    }
}