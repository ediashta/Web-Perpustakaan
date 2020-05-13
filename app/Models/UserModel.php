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

    public function deleteUser($user)
    {
        $builder = $this->db->table('user');
        $builder->where('username', $user);

        $builder->delete();
    }

    public function updateUser($user, $data)
    {
        $builder = $this->db->table('user');
        $builder->where('username', $user);
        $builder->update($data);
    }
}
