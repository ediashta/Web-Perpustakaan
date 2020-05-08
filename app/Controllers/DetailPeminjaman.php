<?php

namespace App\Controllers;

class detailPeminjaman extends BaseController
{
    public function Index()
    {
        echo view('header');
        echo view('footer');
        echo view('navbar');
        return view('detailPeminjaman');
    }
    //--------------------------------------------------------------------

}
