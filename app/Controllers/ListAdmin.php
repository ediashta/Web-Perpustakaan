<?php

namespace App\Controllers;

use App\Models\BukuModel;

class ListAdmin extends BaseController
{
    public function index()
    {
        $buku = new BukuModel();
        //get buku
        $data['buku'] = $buku->getBuku();

        echo view('header');
        echo view('footer');
        echo view('navbar');
        return view('listAdmin', $data);
    }
    //--------------------------------------------------------------------

}
