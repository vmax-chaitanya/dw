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
		$data['page_title'] = "About || Digital win ||";

		$this->load->view('home/about', $data);
	}
	public function privacy_policy()
	{
		// Load the about view
		$data['page_title'] = "Privacy Policy || Digital win ||";

		$this->load->view('home/privacy_policy', $data);
	}
	public function disclamer()
	{
		// Load the about view
		$data['page_title'] = "Disclamer || Digital win ||";

		$this->load->view('home/disclamer', $data);
	}

	public function why_only_we()
	{
		// Load the about view
		$data['page_title'] = "Why Only We || Digital win ||";

		$this->load->view('home/why_only_we', $data);
	}

	public function why_digital_marketing()
	{
		// Load the about view
		$data['page_title'] = "Why Digital Marketing || Digital win ||";

		$this->load->view('home/why_digital_marketing', $data);
	}


	public function contact()
	{
		// Load the contact view
		//echo "hi"; exit;
		$data['page_title'] = "Home || Digital win ||";
		$data['services'] = $this->Home_model->getActiveServices(1);

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

	public function services($type)
	{
		// Load the services view
		$data['page_title'] = "Home || Digital win ||";
		$data['services'] = $this->Home_model->getActiveServices($type);
		$this->load->view('home/services', $data);
	}
	public function other_services()
	{
		// Load the services view
		$data['page_title'] = "Home || Digital win ||";
		$data['services'] = $this->Home_model->getActiveOtherServices();
		$this->load->view('home/services', $data);
	}
	public function service_detail($type, $service_id)
	{

		$data['page_title'] = "Home || Digital win ||";
		$data['services_detail'] = $this->Home_model->get_service_by_id($service_id);
		$module = 1;
		$data['services_module1'] = $this->Home_model->services_types($service_id, $module);
		$module = 2;
		$data['services_module2'] = $this->Home_model->services_types($service_id, $module);
		$module = 3;
		$data['services_module3'] = $this->Home_model->services_types($service_id, $module);

		$data['service_faqs'] = $this->Home_model->getActiveServiceFaq($service_id);
		//echo "<pre>"; print_r($data['services_types']); exit;
		$data['services'] = $this->Home_model->getActiveServices($type);
		$data['upcoming_services'] = $this->Home_model->getUpcomingServices($service_id, 5,$type);

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
		$data['blogs'] = $this->Home_model->get_all_blogs();

		$data['page_title'] = "Blogs Details || Digital win ||";
		$data['blog'] = $this->Home_model->get_blog_by_id($blog_id);

		$this->load->view('home/blog_detail', $data);
	}
	public function training_enquiry()
	{
		//print_r($this->input->post()); exit;
		$data = array(
			'name' => $this->input->post('name1'),
			'email' => $this->input->post('email1'),
			'mobile' => $this->input->post('mobile1'),
			'message' => $this->input->post('message1'),
			'subject' => $this->input->post('subject1'),
			'services_ids' => $this->input->post('services_ids'),
			'status' => 1,
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->contact_model->create_contact($data);
		if ($result) {

		
			   $pdfFilePath =  base_url('' . 'assets/home/Brochure.pdf');

				echo $pdfFilePath;
		
		} else {
			echo "Error inserting data.";
			exit;
		}
		exit;
	}

	public function contact_enquiry()
	{
		$this->load->library('email');
		//print_r($this->input->post()); exit;
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'mobile' => $this->input->post('mobile'),
			'subject' => $this->input->post('subject'),
			'coupon_id' => $this->input->post('copoun_id'),
			'message' => $this->input->post('message'),
			'services_ids' => $this->input->post('services_ids'),
			'status' => 1,
			'created_at' => date("Y-m-d H:i:s")
		);

		$result = $this->contact_model->create_contact($data);
		if ($result) {
			// Configure your email settings
			$this->load->library('email',$config);
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['mailtype'] = 'html';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE; 
			$this->email->initialize($config);
			$this->email->from('your_email@example.com', 'DigitalWin');
			$this->email->to('chaitanyakadali3@gmail.com');
			$this->email->subject('Contact Form Submission');
			$this->email->message('Thank you for your message. We will get in touch with you shortly');
			$this->email->send();
			echo "Thank you for your message. We will get in touch with you shortly";
			exit;
		} else {
			echo "Error inserting data.";
			exit;
		}
		exit;
	}
}
