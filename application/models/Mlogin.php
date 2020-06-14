<?php
class Mlogin extends CI_Model
{
    public function validate($post)
    {
        return $this->db
            ->where(['email' => $post['email'], 'password' => md5($post['password'])])
            ->get('users');
    }
}
