<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'buku';

    public function getUser($id = false)
    {

        if ($id === false) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id_buku' => $id])->first();
    }

    public function insertUser($data)
    {
        $this->db->table('buku')->insert($data);
    }

    public function deleteUser($id)
    {
        $builder = $this->db->table('buku');
        $builder->where('id', $id);

        $builder->delete();
    }

    public function updateUser($id, $data)
    {
        $builder = $this->db->table('buku');
        $builder->where('id', $id);
        $builder->update($data);
    }
}
