<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/contact_model'); // Load the Contact_model

        $this->load->model('Home_model');
        $this->load->helper('download');
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
        $data['curriculums'] = $this->Home_model->getActiveCurriculum($training_id);
        $data['key_highlites'] = $this->Home_model->getActiveKeyHighlites($training_id);
       // $data['curriculums'] = $this->Home_model->getActiveCurriculum($training_id);
        //echo "<pre>"; print_r($data['key_highlites']); exit;
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
    public function create_contact()
    {
  // echo "jghfjhgfvfhgfhghgfhgfhg"; exit;
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message'),
                'services_ids' => $this->input->post('services_ids'),
                'status' => 1,
                'created_at' => date("Y-m-d H:i:s")
            );

            $result = $this->contact_model->create_contact($data);
            if ($result) {
               // echo "Data inserted successfully!";

              //  $file_path = base_url().'/assets/images/brochure/1692100123contact-one-img-2.jpg'; // Adjust the path to your file
                $file_path =  base_url('' . '/assets/images/brochure/1692100123contact-one-img-2.jpg');
                $file_name = '1692100123contact-one-img-2.jpg';
                $file_url  = force_download($file_name, file_get_contents($file_path));
                echo $file_url;
                exit;
            } else {
                echo "Error inserting data.";
                exit;
            }
            exit;
    }
}
