<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function __construct()
    {
        helper(['form']);
    }
    public function index()
    {

        echo view('login_tes');
    }

    public function login()
    {

        $user = new UserModel();
        $username = $this->request->getPost('username');
        $passowrd = $this->request->getPost('password');



        $result = $user->getUser($username);

        //Cek input user dengan data di database
        if ($username === $result['username'] && $passowrd === $result['password']) {

            $data = [
                'username' => $username,
                'password' => $passowrd,
                'role' => $result['role']
            ];

            //menyimpan data user ke session
            session()->set($data);

            return redirect()->to(base_url("/buku/index"));

        } else { //Jika tidak ada
            return redirect()->to(base_url("/auth/index"));
        }
    }

    

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url("/auth/index"));
    }
}
