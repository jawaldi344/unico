<?php
class Mregister extends CI_Model
{
    public function store($post)
    {
        $data = array(
            'name'     => $post['name'],
            'email'    => $post['email'],
            'password' => md5($post['password']),
            'birthday' => date("Y-m-d", strtotime($post['date']))
        );
        return $this->db->insert('users', $data);
    }
}
