<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}	

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])) {
			$this->load->model('users_m');
			$query = $this->users_m->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id_user' => $row->id_user,
					'id_role' => $row->id_role,
					'active' => $row->active,
				);
				$this->session->set_userdata($params);
				if ($params['id_role'] == 1 && $params['active'] == 1) {
					echo "<script> 
					alert('Selamat, login berhasil!');
					window.location='".site_url('dashboard/superadmin')."';
					</script>";
				} elseif ($params['id_role'] == 2 && $params['active'] == 1) {
					echo "<script> 
					alert('Selamat, login berhasil!');
					window.location='".site_url('dashboard/admin')."';
					</script>";
				} elseif ($params['id_role'] == 3 && $params['active'] == 1) {
					echo "<script> 
					alert('Selamat, login berhasil!');
					window.location='".site_url('dashboard/user')."';
					</script>";
				}
			}else {
				echo "<script> 
					alert('Login gagal, username atau password salah!');
					window.location='".site_url('auth/login')."';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id_user', 'id_role');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}