<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites_model extends CI_Model {

    public function __construct()
    {
        
    }

    public function create($user)
    {
        $data = array(
            'user_id' => $user->user_id,
            'title' => 'My Game Log',
            'about' => 'This is my game log'
        );
        $this->db->insert('sites', $data);
        return $this->db->insert_id();
    }

    public function get_by_username($username)
    {
        $user = $this->users_model->get_by_username($username);

        $this->db->where('user_id', $user->user_id);
        $result = $this->db->get('sites')->first_row();
        $result->user = $user;
        return $result;
    }

    public function get_by_user_id($user_id)
    {
        $user = $this->users_model->get_by_id($user_id);

        $this->db->where('user_id', $user_id);
        $result = $this->db->get('sites')->first_row();
        $result->user = $user;
        return $result;
    }

    public function save($site_id, $data)
    {
        $this->db->where('site_id', $site_id);
        $this->db->update('sites', $data);
    }

    public function create_message($data)
    {
        $this->db->insert('board', $data);
        return $this->db->insert_id();
    }

    public function get_board($site_id)
    {
        $this->db->where('site_id', $site_id);
        $result = $this->db->get('board')->result();
        return $result;
    }
}