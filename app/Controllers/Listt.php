<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Listt extends BaseController
{
    public function index()
    {
        $buku = new BukuModel();
        //get buku
        $data['buku'] = $buku->getBuku();
        echo view('header');
        echo view('footer');
        echo view('navbar');
        return view('list', $data);
    }
    //--------------------------------------------------------------------

}
