<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('assets')) {
    function assets()
    {
        $link = base_url() . 'assets/';
        return $link;
    }
}
if (!function_exists('cek_user')) {
    function cek_user()
    {
        $CI = &get_instance();
        if ($CI->session->userdata('status_login') != 'Oke') {
            redirect('logout');
        }
    }
}
