<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('users_m');
	}

    public function profilsuperadmin()
    {
        check_not_login();
        $this->load->view('profile/editprofile_superadmin');
    }

    public function daftarsekolah()
    {
        check_not_login();
        $this->load->model('users_m');
        $data['daftarsekolah'] = $this->users_m->tampil_kepsek();
        $this->load->view('super_admin/daftarsekolah_superadmin', $data);
    }

    public function verifikasi()
    {
        check_not_login();
        $this->load->view('super_admin/verifikasi_superadmin');
    }

    public function profiladmin()
    {
        check_not_login();
        $this->load->view('profile/editprofile_adminsekolah');
    }

    public function usergtk()
	{
        check_not_login();
        $this->load->model('users_m');
        $data['usergtk'] = $this->users_m->tampil_user();
		$this->load->view('admin_sekolah/usergtk_adminsekolah', $data);
	}

    public function entrydata()
    {
        check_not_login();
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );

        $this->form_validation->set_message('required', '%s masih kosong, silakan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai silakan ganti yang lain');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai silakan ganti yang lain');
        
        
        $this->form_validation->set_error_delimiters('<span class="help-block">'.'</span>');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin_sekolah/entrydata_adminsekolah');  
        } else {
            $post = $this->input->post(null, TRUE);
            $this->users_m->add($post);

            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('users/entrydata')."';</script>";
        } 
    }

    public function profiluser()
    {
        check_not_login();
        $this->load->view('profile/editprofile_user');
    }

    public function pegawai()
    {
        check_not_login();
        $ci = &get_instance();
    	$user_session = $ci->session->userdata('id_user');
		$data['identitas'] = $this->users_m->tampil_datapeg($user_session);
        $this->load->view('user/kepegawaian_user', $data);
    }

    public function del_user()
    {
        $id = $this->input->post('id_identitas');
        $this->users_m->del_user($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('users/usergtk')."';</script>";
    }

    public function del_useradm()
    {
        $id = $this->input->post('id_identitas');
        $this->users_m->del_user($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('dashboard/superadmin')."';</script>";
    }

    public function del_admin()
    {
        $id = $this->input->post('id_identitas');
        $this->users_m->del_admin($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('dashboard/superadmin')."';</script>";
    }

    public function del_sekolah()
    {
        $id = $this->input->post('id_sekolah');
        $this->users_m->del_sekolah($id);

        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        echo "<script>window.location='".site_url('users/daftarsekolah')."';</script>";
    }

    /*public function update($id)
    {
        check_not_login();
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
                array('matches' => '%s tidak sesuai dengan password')
            );

        $this->form_validation->set_message('required', '%s masih kosong, silakan isi');
        $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai silakan ganti yang lain');
        $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai silakan ganti yang lain');
        
        
        $this->form_validation->set_error_delimiters('<span class="help-block">'.'</span>');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin_sekolah/entrydata_adminsekolah');  
        } else {
            $post = $this->input->post(null, TRUE);
            $this->users_m->add($post);

            if ($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('users/entrydata')."';</script>";
        } 
    }*/


}