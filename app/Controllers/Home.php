<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('user') == null) {
            return redirect()->to('/login');
        }
        echo view('header');
        echo view('home_view');
        echo view('footer');
        // return view('welcome_message');
    }
}
