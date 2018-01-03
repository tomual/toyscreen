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
}