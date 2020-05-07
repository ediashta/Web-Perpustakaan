<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';

    public function getBuku($id = false)
    {

        if ($id === false) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id_buku' => $id])->first();
    }

    public function insertBuku($data)
    {
        $this->db->table('buku')->insert($data);
    }

    public function deleteBuku($id)
    {
        $builder = $this->db->table('buku');
        $builder->where('id_buku', $id);

        $builder->delete();
    }

    public function updateBuku($id, $data)
    {
        $builder = $this->db->table('buku');
        $builder->where('id_buku', $id);
        $builder->update($data);
    }
}