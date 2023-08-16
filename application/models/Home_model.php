<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Example method to get all blog entries
    public function get_all_blogs() {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('status', '1'); // Fetch only active blogs
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Example method to get a specific blog entry by ID
    public function get_blog_by_id($id) {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    // Add more methods here for other functionalities as needed
    public function getActiveBanners()
    {
        $this->db->where('type', '1');
        $this->db->where('status', '1');
        return $this->db->get('banners')->result_array();
    }
    public function getTrainingBanners()
    {
        $this->db->where('status', '1');
        return $this->db->get('training')->result_array();
    }
    public function get_training_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('training');
        return $query->row_array();
    }
}
