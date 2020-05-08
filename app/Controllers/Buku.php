<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{

    public function index()
    {
        $buku = new BukuModel();

        //get buku
        $data['buku'] = $buku->getBuku();

        echo view('buku', $data);
    }

    public function view($id)
    {
        $buku = new BukuModel();

        //get Buku
        // $data['buku'] = $buku->getBuku($id);
        echo "tes";
        // echo view('detail_buku', $data);
    }

    public function delete()
    {
        $buku = new BukuModel();
        $buku->deleteBuku(30);
        echo "delete";
    }

    public function update()
    {
        echo view('edit_buku'); //view bisa diganti
    }

    public function update_process($id)
    {
        $buku = new BukuModel();

        $data = [
            'judul' => "One Piece",
            'penulis' => "Eiichiro Oda",
        ];

        // $data = [
        //     'judul' => $this->request->getPost['judul'],
        //     'penulis' => $this->request->getPost['penulis'],
        //     'kategori' => $this->request->getPost['kategori'],
        //     'stock' => $this->request->getPost['stock'],
        // ];

        $buku->updateBuku($id, $data);

        echo "Update Berhasil";

        /*
            base_urlnya localhost/perpustakaan

            controller dan method menyesuaikan
        */
        redirect()->to(base_url() + "/buku/dashboard");
    }
}
