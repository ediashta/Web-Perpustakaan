<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('footer');
        return view('register');
    }
    //--------------------------------------------------------------------

}
