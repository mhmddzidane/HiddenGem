<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{


    public function tambah_post($data)
    {
        $this->db->table('postingan')->insert($data);
    }

    public function tampil_data()
    {
        $session = session();
        return $this->db->table("user")
            ->where('id_user', $session->get('id_user'))
            ->get()->getRowArray();
    }

    public function edit_profile($data)
    {
        $this->db->table('user')->where('id_user', $data['id_user'])->update($data);
    }

    public function edit_foto($id_postingan)
    {
        return $this->db->table("postingan")
            ->where('id_postingan', $id_postingan)
            ->get()->getRowArray();
    }

    public function tampil_post()
    {
        $session = session();
        return $this->db->table("postingan")
            ->where('id_user', $session->get('id_user'))
            // ->join('user', 'user.id_user = postingan.id_user', 'left')
            ->get()->getResultArray();
    }

    public function hapus_postingan($data)
    {
        $this->db->table('postingan')->where('id_postingan', $data['id_postingan'])->delete($data);
    }

    public function edit_postingan($data)
    {
        $this->db->table('postingan')->where('id_postingan', $data['id_postingan'])->update($data);
    }
}
