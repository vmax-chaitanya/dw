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
    public function getActiveTraining()
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

    public function getActiveCurriculum($training_id)
    {
        $this->db->where('status', '1');
        $this->db->where('training_id', $training_id);
        return $this->db->get('training_curricullum')->result_array();
    }

    public function getActiveKeyHighlites($training_id)
    {
        $this->db->where('status', '1');
        $this->db->where('training_id', $training_id);
        return $this->db->get('key_highlights')->result_array();
    }
    public function getActiveCertification()
    {
        $this->db->where('status', '1');
        return $this->db->get('certification_courses')->result_array();
    }
    public function getActiveTools()
    {
        $this->db->where('status', '1');
        $this->db->where('type', '3');
        return $this->db->get('gallery')->result_array();
    }
    public function getActiveCertificationCoursesTools()
    {
        $this->db->where('status', '1');
        $this->db->where('type', '4');
        return $this->db->get('gallery')->result_array();
    }
    public function getActiveServices($type)
    {
        $this->db->where('type', $type);
        $this->db->where('status', '1');
        return $this->db->get('services')->result_array();
    }
    public function getActiveOtherServices()
    {
        $this->db->where('type', '2');
        $this->db->where('status', '1');
        return $this->db->get('services')->result_array();
    }
    public function get_service_by_id($id)
    {
        $this->db->where('service_url', $id);
        $query = $this->db->get('services');
        return $query->row_array();
    }
    public function getActiveServiceFaq($service_id)
    {
        $this->db->where('status', '1');
        $this->db->where('type', '2');
        $this->db->where('page_id', $service_id);
        return $this->db->get('faq')->result_array();
    }
    public function services_types($service_id,$module)
    {
        $this->db->where('status', '1');
        $this->db->where('type', $module);
        $this->db->where('service_id', $service_id);
        return $this->db->get('services_cards')->result_array();
    }
    // public function services_we_choose($service_id)
    // {
    //     $this->db->where('status', '1');
    //    // $this->db->where('type', '2');
    //     $this->db->where('service_id', $service_id);
    //     return $this->db->get('services_cards')->result_array();
    // }
    public function getActiveServiceNames()
    {
        $this->db->select('id,name,type,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '1');
        return $this->db->get('services')->result_array();
    }
    public function getActiveOtherServiceNames()
    {
        $this->db->select('id,name,type,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '2');
        return $this->db->get('services')->result_array();
    }
    public function getFooterServiceNames()
    {
        $this->db->select('id,name,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '1');
        $this->db->order_by("id", "desc");
        $this->db->limit(6);
        return $this->db->get('services')->result_array();
    }
    public function getFooterOtherServiceNames()
    {
        $this->db->select('id,name,service_url');
        $this->db->where('status', '1');
        $this->db->where('type', '2');
        $this->db->order_by("id", "desc");
        $this->db->limit(6);
        return $this->db->get('services')->result_array();
    }
    public function getUpcomingServices($current_service_id, $limit,$type)
{
    // Fetch upcoming services based on the current service's ID
    $this->db->select('*');
    $this->db->from('services');
    $this->db->where('id >', $current_service_id);
    $this->db->where('type', $type); // Filter by the type of service if needed
    $this->db->where('status', '1'); // Filter by active status if needed
    $this->db->order_by('id', 'ASC');
    $this->db->limit($limit);
    $query = $this->db->get();

    $upcoming_services = $query->result_array();

    // If no upcoming services found, fetch random services
    if (count($upcoming_services) < 3) {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->where('type', $type); // Filter by the type of service if needed
        $this->db->where('status', '1'); // Filter by active status if needed
       // $this->db->order_by('RAND()'); // Get random services
        $this->db->limit($limit);
        $query = $this->db->get();

        $upcoming_services = $query->result_array();
    }

    return $upcoming_services;
}


    // public function getActiveBlog()
    // {
    //     $this->db->where('status', '1');
    //     return $this->db->get('blogs')->result_array();
    // }
    // public function get_blog_by_id($id)
    // {
    //     $this->db->where('id', $id);
    //     $query = $this->db->get('blogs');
    //     return $query->row_array();
    // }
}
