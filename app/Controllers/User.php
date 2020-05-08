<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function login()
    {
        //Instansiasi Objek
        $user = new UserModel();

        //Ambil nilai dari form login
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        //Inisialisasi dari data user
        $data['user'] = $user->getUser();

        //If else nentuin admin atau user
        if ($data['user']['role'] == 1) {
            echo view('admin', $data);
        } else if ($data['user']['role'] == 2) {
            echo view('user', $data);
        }
    }
}
