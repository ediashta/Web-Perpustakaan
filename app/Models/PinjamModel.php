<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
    protected $table = 'pinjam';

    public function getPinjam($username = false)
    {
        if ($username === false) {
            return $this->findAll();
        } else {
            return $this->where('username', $username)->get()->getRowArray();
        }
    }

    public function insertPinjam($data)
    {
        $builder = $this->db->table('pinjam');
        $builder->insert($data);
    }

    public function deletePinjam($id)
    {
        $builder = $this->db->table('pinjam');
        $builder->where('username', $id);

        $builder->delete();
    }
}
