<?php 

function check_already_login() {
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_role');
    if ($user_session == 1) {
        redirect('dashboard/superadmin');
    }elseif ($user_session == 2) {
        redirect('dashboard/admin');
    }elseif ($user_session == 3) {
        redirect('dashboard/user');
    }
}

function check_not_login() {
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_role');
    if (!$user_session) {
        redirect('auth/login');
    }
}

 ?>