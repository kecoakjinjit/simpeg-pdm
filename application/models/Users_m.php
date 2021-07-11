<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $this->db->where('active', 1);
        $query = $this->db->get();
        return $query;
	}	

    public function get($id = null){
        $this->db->from('users');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function tampil_sekolah($id)
    {
    
        return $this->db->query("SELECT * FROM sekolah WHERE id_user='".$id."'")->result_array();
    }

    public function tampil_kepsek()
    {
        return $this->db->query("SELECT sekolah.nama, sekolah.npsn, sekolah.alamat, sekolah.kepsek, sekolah.id_sekolah, sekolah.jumlah_siswa  FROM sekolah")->result_array();
    }

    public function tampil_user()
    {
        return $this->db->query("SELECT users.nama, identitas.nuptk, users.username, identitas.id_status, identitas.id_identitas  FROM identitas INNER JOIN users ON identitas.id_user=users.id_user WHERE users.id_role=3")->result_array();
    }

    public function tampil_admin()
    {
        return $this->db->query("SELECT users.nama, identitas.nuptk, users.username, identitas.id_status, identitas.id_identitas  FROM identitas INNER JOIN users ON identitas.id_user=users.id_user WHERE users.id_role=2")->result_array();
    }

    public function add($post)
    {
        $params['nama']     = $post['fullname'];
        $params['email']    = $post['email'];
        $params['username'] = $post['username'];
        $params['password'] = $post['password'];
        $params['id_role'] = 4;
        $params['active'] = 0;

        $this->db->insert('users', $params);
    }

    public function del_user($id)
    {
        $this->db->query("DELETE FROM identitas WHERE id_identitas='".$id."'");
    
    }

    public function del_admin($id)
    {
        $this->db->query("DELETE FROM identitas WHERE id_identitas='".$id."'");
    
    }

    public function del_sekolah($id)
    {
        $this->db->query("DELETE FROM sekolah WHERE id_sekolah='".$id."'");
    
    }
    
    public function tampil_datadiri($id)
    {
        return $this->db->query("SELECT users.nama, identitas.nip, identitas.id_jk, 
        identitas.id_agama, identitas.hp, 
        identitas.alamat, users.email 
        FROM identitas 
        INNER JOIN users 
        ON identitas.id_user=users.id_user 
        WHERE users.id_user='".$id."'")->result_array();
    }

    public function tampil_datapeg($id)
    {
        return $this->db->query("SELECT users.nama, identitas.nip, identitas.id_jk, 
        identitas.nuptk, identitas.tempat_lahir, identitas.tgl_lahir, 
        identitas.id_status, identitas.id_pangkat, identitas.hp, 
        identitas.alamat, users.email, identitas.npwp 
        FROM identitas 
        INNER JOIN users 
        ON identitas.id_user=users.id_user 
        WHERE users.id_user='".$id."'")->result_array();
    }

}