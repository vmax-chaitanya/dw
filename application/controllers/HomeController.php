<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/contact_model'); // Load the Contact_model

        $this->load->model('Home_model');
        $this->load->helper('download');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data['page_title'] = " Home || Digital win || ";
        $data['banners'] = $this->Home_model->getActiveBanners();
        $data['trainings'] = $this->Home_model->getActiveTraining();
        //echo $this->db->last_query(); exit;;
        //print_r($data['banners']); exit;
        $this->load->view('home/index', $data);
    }

    public function about()
    {
        // Load the about view
        $data['page_title'] = "Home || Digital win ||";

        $this->load->view('home/about', $data);
    }

    public function contact()
    {
        // Load the contact view
        //echo "hi"; exit;
        $data['page_title'] = "Home || Digital win ||";

        $this->load->view('home/contact', $data);
    }

    // public function blog() {
    //     // Load the blog view
    //     $data['page_title']="Home || Digital win ||";

    //     $this->load->view('home/blog',$data);
    // }

    public function faq()
    {
        // Load the FAQ view
        $data['page_title'] = "Home || Digital win ||";

        $this->load->view('home/faq', $data);
    }

    public function services()
    {
        // Load the services view
        $data['page_title'] = "Home || Digital win ||";
        $data['services'] = $this->Home_model->getActiveServices();
        $this->load->view('home/services', $data);
    }
    public function service_detail($service_id)
    {

        $data['page_title'] = "Home || Digital win ||";
        $data['services_detail'] = $this->Home_model->get_service_by_id($service_id);
        $data['curriculums'] = $this->Home_model->getActiveCurriculum($service_id);
        $data['key_highlites'] = $this->Home_model->getActiveKeyHighlites($service_id);
        $data['services'] = $this->Home_model->getActiveServices();

        $this->load->view('home/service_detail', $data);
    }

    public function training()
    {

        $data['page_title'] = "Home || Digital win ||";
        $data['certification_course'] = $this->Home_model->getActiveCertification();
        $data['trainings'] = $this->Home_model->getActiveTraining();
        $data['tools'] = $this->Home_model->getActiveTools();
        $data['certification_courses'] = $this->Home_model->getActiveCertificationCoursesTools();

        //print_r($data['training']); exit;
        $this->load->view('home/training', $data);
    }
    public function training_detail($training_id)
    {

        $data['page_title'] = "Home || Digital win ||";
        $data['training'] = $this->Home_model->get_training_by_id($training_id);
        $data['curriculums'] = $this->Home_model->getActiveCurriculum($training_id);
        $data['key_highlites'] = $this->Home_model->getActiveKeyHighlites($training_id);
        $data['trainings'] = $this->Home_model->getActiveTraining();
        $this->load->view('home/training_detail', $data);
    }
    public function blogs()
    {

        $data['page_title'] = "Blogs || Digital win ||";
        $data['blogs'] = $this->Home_model->get_all_blogs();
        //  print_r($data['blogs']); exit;
        $this->load->view('home/blog', $data);
    }
    public function blog_detail($blog_id)
    {

        $data['page_title'] = "Blogs Details || Digital win ||";
        $data['training'] = $this->Home_model->get_blog_by_id($blog_id);
        //print_r($data['training']); exit;
        $this->load->view('home/blog_detail', $data);
    }
    public function create_contact()
    {

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
          
            $this->load->helper('download');
            $file_path = trim(base_url('' . $this->input->post('brochure')));
            $file_path = str_replace("/ /", "/", $file_path);
            $file_name = time() . '.jpg';
            $file_url = force_download($file_name, file_get_contents($file_path));
            echo $file_url;
            exit;
        } else {
            echo "Error inserting data.";
            exit;
        }
        exit;
    }
}