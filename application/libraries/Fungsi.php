<?php 

Class Fungsi{
    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    function users_login() {
        $this->ci->load->model('users_m');
        $id_user = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->users_m->get($id_user)->row();
        return $user_data;
    }
}

?>