<?php

namespace App\Controllers;

use App\Models\UserModels;

class User extends BaseController
{
    public function __construct()
    {
        $this->uModel = new UserModels();
    }

    public function index()
    {
        if (session()->get('user') == null) {
            return redirect()->to('/login');
        }
        $data["user"] = $this->uModel->getUserList();

        return view('userView', $data);
    }
    public function createUser()
    {
        return view('tambahUser');
    }
    public function editUser($id)
    {
        return view('editData', ['user' => $this->uModel->getUserById($id)]);
    }

    public function create()
    {
        $data = [
            "IDUser" => session()->get('user'),
            "Nama" => $this->request->getPost("Nama"),
            "Password" => $this->request->getPost("Password"),
            "Hak_Akses" => $this->request->getPost("Hak_Akses"),
            "Manager" => $this->request->getPost("Manager"),
            //"Create_Date" => $this->request->getPost("Create_Date"),
        ];
        $this->uModel->addUser($data);
        return redirect()->to('/user');
    }
    public function edit($id)
    {
        $data = [
            "IDUser" => $id,
            'Nama' => $this->request->getPost('Nama'),
            'Password' => $this->request->getPost('Password'),
            'Hak_Akses' => $this->request->getPost('Hak_Akses'),
            'Manager' => $this->request->getPost('Manager')
        ];
        $this->uModel->updateUser($id, $data);
        return redirect()->to('/user');
    }
    /**$data = [
            "IDUser" => session()->get('user'),
            "Nama" => $this->request->getPost("Nama"),
            "Password" => $this->request->getPost("Password"),
            "Hak_Akses" => $this->request->getPost("Hak_Akses"),
            "Manager" => $this->request->getPost("Manager"),
            //"Create_Date" => $this->request->getPost("Create_Date"),
        ];
        $this->uModel->updateUser($data);
        return redirect()->to('/user');
     **/
    public function delete($id)
    {
        $this->uModel->deleteUser($id);
        return redirect()->to('/user');
    }
    /**public function __construct()
    {
        $this->uModel = new UserModels();
    }
    public function index()
    {
        if (session()->get('user') == null) {
            return redirect()->to('/login');
        }
        $activeSession = session()->get('user');
        $data["user"] = $this->uModel->getUser($activeSession["IDUser"]);

        return view('userView', $data);
    }
    public function logout()
    {
        session()->destroy();
        return  redirect()->to('/home');
    }**/
}
