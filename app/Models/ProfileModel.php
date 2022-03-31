<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    public function tambah_post($data)
    {
        $this->db->table('postingan')->insert($data);
    }
}
