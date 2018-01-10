<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert('posts', $data);
    }

    public function update($post_id, $data)
    {
        $this->db->where('post_id', $post_id);
        $this->db->update('posts', $data);
    }

    public function get_post($site_id, $post_id = NULL)
    {
        if(!$post_id) {
            $this->db->order_by('posted', 'DESC');
            $this->db->limit(1);
        } else {
            $this->db->where('post_id', $post_id);
        }
        $this->db->where('site_id', $site_id);
        $result = $this->db->get('posts')->first_row();
        return $result;
    }

    public function get_posts()
    {
        $this->db->order_by('posted', 'DESC');
        $this->db->order_by('post_id', 'DESC');
        $this->db->group_by('post_id');
        $results = $this->db->get('posts')->result();
        return $results;
    }

    public function get_next($post)
    {
        if(!$post) {
            return null;
        }
        $this->db->where('posted >', $post->posted);
        $this->db->where('site_id', $post->site_id);
        $this->db->order_by('post_id', 'ASC');
        $this->db->limit(1);
        $results = $this->db->get('posts')->first_row();
        return $results;
    }

    public function get_prev($post)
    {
        if(!$post) {
            return null;
        }
        $this->db->where('posted <', $post->posted);
        $this->db->where('site_id', $post->site_id);
        $this->db->order_by('post_id', 'DESC');
        $this->db->limit(1);
        $results = $this->db->get('posts')->first_row();
        return $results;
    }

    public function get_latest()
    {
        $this->db->order_by('posted', 'DESC');
        $this->db->order_by('post_id', 'DESC');
        $this->db->group_by('post_id');
        $this->db->limit('10');
        $results = $this->db->get('posts')->result();
        return $results;
    }

    public function get_archive($site_id)
    {
        $this->db->select('post_id, posted');
        $this->db->where('site_id', $site_id);
        $this->db->order_by('posted', 'DESC');
        $results = $this->db->get('posts')->result();
        return $results;
    }
}