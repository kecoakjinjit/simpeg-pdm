<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('users_m');
	}

	public function superadmin()
	{
		check_not_login();
        $this->load->model('users_m');
        $data['superadmin'] = $this->users_m->tampil_admin();
		$data['usergtk'] = $this->users_m->tampil_user();
		$this->load->view('dashboard/dashboard_superadmin', $data);

	}
		
	public function admin()
	{
		
		check_not_login();
		$ci = &get_instance();
    	$user_session = $ci->session->userdata('id_user');
		$data['sekolah'] = $this->users_m->tampil_sekolah($user_session);
		$this->load->view('dashboard/dashboard_adminsekolah', $data);
	}
		
	public function user()
	{
		check_not_login();
		$ci = &get_instance();
    	$user_session = $ci->session->userdata('id_user');
		$data['identitas'] = $this->users_m->tampil_datadiri($user_session);
		$this->load->view('dashboard/dashboard_user', $data);
	}	
}