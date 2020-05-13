<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('footer');
		return view('login');
	}
	//--------------------------------------------------------------------

	public function login()
	{

		$user = new UserModel();
		$username = $this->request->getPost('username');
		$passowrd = $this->request->getPost('password');
		$id = $this->request->getPost('id');
		$status = $this->request->getPost('status');



		$result = $user->getUser($username);

		//Cek input user dengan data di database
		if ($username === $result['username'] && $passowrd === $result['password']) {

			//menyimpan data user ke session
			session()->set($result);

			return redirect()->to(base_url("/home"));
		} else { //Jika tidak ada
			return redirect()->to(base_url("/login"));
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url("login/index"));
	}
}
