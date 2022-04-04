<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    public function tampil_komentar()
    {
        return $this->db->table("komentar")
            ->join('postingan', 'postingan.id_postingan = komentar.id_postingan', 'left')
            ->join('user', 'user.id_user = komentar.id_user', 'left')
            // ->where('komentar.id_postingan')
            ->orderBy('id_komentar', 'DESC')
            ->get()->getResultArray();
    }
}
