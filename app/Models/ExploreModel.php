<?php

namespace App\Models;

use CodeIgniter\Model;

class ExploreModel extends Model
{
    public function tampil_post()
    {
        return $this->db->table("postingan")
            ->join('user', 'user.id_user = postingan.id_user', 'left')
            ->orderBy('id_postingan', 'DESC')
            ->get()->getResultArray();
    }

    public function cari_post($keyword)
    {
        return $this->db->table("postingan")
            ->join('user', 'user.id_user = postingan.id_user', 'left')
            ->like('judul_post', $keyword)
            ->orLike('nama_user', $keyword)
            ->orderBy('id_postingan', 'DESC')
            ->get()->getResultArray();
    }
}
