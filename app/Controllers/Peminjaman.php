<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\UserModel;
use App\Models\PinjamModel;

class Peminjaman extends BaseController
{
    public function Index()
    {
        echo view('header');
        echo view('footer');
        echo view('navbar');
        $buku = new BukuModel();
        $user = new UserModel();
        $pinjam = new PinjamModel();
        //get buku
        $data['buku'] = $buku->getBuku();
        $data['user'] = $user->getUser();
        $data['pinjam'] = $pinjam->getPinjam(session()->get('username'));
        return view('detailPeminjaman', $data);
        // var_dump($data['pinjam']['username']);
    }
    //--------------------------------------------------------------------

    public function pinjam_process()
    {
        $buku = new BukuModel();
        $pinjam = new PinjamModel();
        $user = new UserModel();
        $orang = $user->getUser(session()->get('username'));

        $id = $this->request->getPost('id');
        $stock = $this->request->getPost('stock');
        $dataBuku = [
            'stock' => $stock - 1
        ];
        $dataUser = [
            'status' => 1
        ];
        $dataPinjaman = [
            'username' => $orang['username'],
            'id_buku' => $id,
            'tanggalSewa' => "20-05-2020"
        ];
        if ($orang['status'] == 0) {
            if ($stock > 0) {
                $buku->updateBuku($id, $dataBuku);
                $user->updateUser($orang['username'], $dataUser);
                $pinjam->insertPinjam($dataPinjaman);
            }
            return redirect()->to(base_url("/home"));
        } else {
            echo view('alert');
            return redirect()->to(base_url("/home"));
        }
    }

    public function kembali_process()
    {
        $buku = new BukuModel();
        $pinjam = new PinjamModel();
        $user = new UserModel();
        $orang = $user->getUser(session()->get('username'));
        $id_buku = $pinjam->getPinjam('aransa');
        $stock = $buku->getBuku($id_buku['id_buku'])['stock'];
        $dataBuku = [
            'stock' => $stock + 1
        ];
        $dataUser = [
            'status' => 0
        ];
        $buku->updateBuku($id_buku['id_buku'], $dataBuku);
        $user->updateUser($orang['username'], $dataUser);
        $pinjam->deletePinjam($orang['username']);
        echo "bisa";
        return redirect()->to(base_url("/home"));
    }
}
