<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\UserModel;

class Home extends BaseController
{
    //--------------------------------------------------------------------
    public function Index()
    {
        echo view('header');
        echo view('footer');
        echo view('navbar');
        $buku = new BukuModel();
        //get buku
        $data['buku'] = $buku->getBuku();
        if (session()->get('role') == 1) {
            return view('homeAdmin', $data);
        } else {
            return view('homeUser', $data);
        }
    }
}
