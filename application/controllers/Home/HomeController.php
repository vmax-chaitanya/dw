<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('form_validation');
    }
    public function index() {
     
        $data['page_title'] = " Home || Digital win || ";
        $data['banners'] = $this->Home_model->getActiveBanners();
        $data['trainings'] = $this->Home_model->getActiveTraining();
        //echo $this->db->last_query(); exit;;
        //print_r($data['banners']); exit;
        $this->load->view('home/index',$data);
    }

    public function about() {
        // Load the about view
        $data['page_title']="Home || Digital win ||";

        $this->load->view('home/about',$data);
    }

    public function contact() {
        // Load the contact view
        //echo "hi"; exit;
        $data['page_title']="Home || Digital win ||";

        $this->load->view('home/contact',$data);
    }

    // public function blog() {
    //     // Load the blog view
    //     $data['page_title']="Home || Digital win ||";

    //     $this->load->view('home/blog',$data);
    // }

    public function faq() {
        // Load the FAQ view
        $data['page_title']="Home || Digital win ||";

        $this->load->view('home/faq',$data);
    }

    public function services() {
        // Load the services view
        $data['page_title']="Home || Digital win ||";

        $this->load->view('home/services',$data);
    }

    public function training() {
       
        $data['page_title']="Home || Digital win ||";
        $data['trainings'] = $this->Home_model->getActiveTraining();
        //print_r($data['training']); exit;
        $this->load->view('home/training',$data);
    }
    public function training_detail($training_id) {
       
        $data['page_title']="Home || Digital win ||";
        $data['training'] = $this->Home_model->get_training_by_id($training_id);
        //print_r($data['training']); exit;
        $this->load->view('home/training_detail',$data);
    }
    public function blogs() {
       
        $data['page_title']="Blogs || Digital win ||";
        $data['blogs'] = $this->Home_model->get_all_blogs();
      //  print_r($data['blogs']); exit;
        $this->load->view('home/blog',$data);
    }
    public function blog_detail($blog_id) {
       
        $data['page_title']="Blogs Details || Digital win ||";
        $data['training'] = $this->Home_model->get_blog_by_id($blog_id);
        //print_r($data['training']); exit;
        $this->load->view('home/blog_detail',$data);
    }
}
