<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Perpustakaan extends Controller {
    function index(){
        $this->db = db_connect();

        if($this->db->connection_status == 200){
            echo "Connect berhasil";
        }
    }
}