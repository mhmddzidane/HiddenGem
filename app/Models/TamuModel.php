<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    public function tambah_tamu($data)
    {
        $this->db->table('bukutamu')->insert($data);
    }

    public function tampil_tamu()
    {
        return $this->db->table("bukutamu")
            ->orderBy('id_tamu', 'ASC')
            ->get()->getResultArray();
    }
}
