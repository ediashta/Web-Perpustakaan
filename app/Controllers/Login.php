<?php

namespace App\Controllers;


class Login extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('footer');
		return view('login');
	}
	//--------------------------------------------------------------------

}
