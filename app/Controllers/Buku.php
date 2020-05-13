<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{
    public function tambah()
    {
        echo view('header');
        echo view('footer');
        echo view('navbar');
        echo view('bukuAdd');
    }

    public function tambah_process()
    {

        $buku = new BukuModel();

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'kategori' => $this->request->getPost('kategori'),
            'stock' => $this->request->getPost('stock'),
        ];

        $buku->insertBuku($data);

        /*
            base_urlnya localhost/perpustakaan

            controller dan method menyesuaikan
        */
        return redirect()->to(base_url("/home"));
    }

    public function delete($id)
    {
        $buku = new BukuModel();
        $buku->deleteBuku($id);

        return redirect()->to(base_url('/home'));
    }

    public function update($id)
    {
        $buku = new BukuModel();

        $data['buku'] = $buku->getBuku($id);

        echo view('header');
        echo view('footer');
        echo view('navbar');
        return view('bukuUpdate', $data); //view bisa diganti
    }

    public function update_process()
    {
        $buku = new BukuModel();
        $id = $this->request->getPost('id');

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'kategori' => $this->request->getPost('kategori'),
            'stock' => $this->request->getPost('stock'),
        ];

        $buku->updateBuku($id, $data);

        return redirect()->to(base_url("/home"));
    }
}
