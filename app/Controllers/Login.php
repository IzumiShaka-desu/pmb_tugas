<?php

namespace App\Controllers;

use App\Models\UserModels;
use Exception;

class Login extends BaseController
{
    public function __construct()
    {
        $this->uModel = new UserModels();
    }
    public function index()
    {

        if (session()->get('user') != null) {
            return redirect()->to('/Home');
        }
        return view('LoginView');
    }
    public function action()
    {
        $uname = $this->request->getPost("Username");
        $pass = $this->request->getPost("password");
        $user = $this->uModel->getUserByUnamePassword($uname, $pass);
        try {

            if ($user[0] == null) {
                session()->setFlashdata('error', " login gagal ");
                return redirect()->back()->withInput();
            } else {

                session()->set([
                    'user' => [
                        'Username' => $user[0]["Nama"],
                        'level' => $user[0]["Hak_Akses"],
                        'id' => $user[0]["IDUser"]
                    ]
                ]);
                return redirect()->to('/home');
            }
        } catch (Exception $e) {
            session()->setFlashdata('error', " login gagal ");
            return redirect()->back()->withInput();
        }
    }
}
