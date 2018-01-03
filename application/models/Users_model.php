<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function __construct()
    {

    }

    public function get_by_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $user = $query->first_row();
        $user->user_id = $user->id;
        return $user;
    }

    public function get_by_id($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        $user = $query->first_row();
        $user->user_id = $user->id;
        return $user;
    }
}