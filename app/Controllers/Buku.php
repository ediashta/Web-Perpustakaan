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

        if (session()->get('role') == 1) {
            echo view('dashboard_admin', $data);
        } else if (session()->get('role') == 2) {
            echo view('dashboard_user', $data);
        }
    }

    public function view($id)
    {
        $buku = new BukuModel();

        //get Buku
        // $data['buku'] = $buku->getBuku($id);
        echo "tes";
        // echo view('detail_buku', $data);
    }

    public function tambah()
    {
        echo view('tes_tambah');
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
        return redirect()->to(base_url("/buku/index"));
    }

    public function delete($id)
    {
        $buku = new BukuModel();
        $buku->deleteBuku($id);

        return redirect()->to(base_url('/buku/index'));
    }

    public function update($id)
    {
        $buku = new BukuModel();

        $data['buku'] = $buku->getBuku($id);

        // var_dump($data);
        echo view('tes_edit', $data); //view bisa diganti
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

        /*
            base_urlnya localhost/perpustakaan

            controller dan method menyesuaikan
        */
        return redirect()->to(base_url("/buku/index"));
    }
}
