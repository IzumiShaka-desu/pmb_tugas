<?php

namespace App\Controllers;

class Transaction extends BaseController
{
    public function index()
    {
        if (session()->get('user') == null) {
            return redirect()->to('/login');
        }

        echo view('header');

        echo view('footer');
        // return view('welcome_message');
    }
}
