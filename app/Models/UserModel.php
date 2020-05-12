<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';

    public function getUser($username = false)
    {

        if ($username === false) {
            return $this->findAll();
        } else {
            return $this->where('username', $username)->get()->getRowArray();
        }
    }

    public function insertUser($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function deleteUser($id)
    {
        $builder = $this->db->table('user');
        $builder->where('id', $id);

        $builder->delete();
    }

    public function updateUser($id, $data)
    {
        $builder = $this->db->table('user');
        $builder->where('id', $id);
        $builder->update($data);
    }
}
