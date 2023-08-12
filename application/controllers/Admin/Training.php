<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/login'); // Redirect to login page
        }
        $this->load->model('admin/training_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['trainings'] = $this->training_model->get_all_trainings();
     //   print_r($data['trainings']); exit;
        $this->load->view('admin/training_list', $data);
    }

    public function add()
    {
        $this->load->view('admin/training_create');
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'required|max_length[50]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/training_create');
        } else {
            // Handle image upload
            $image_name = '';
            if (!empty($_FILES['image']['name'])) {
               
                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/training/$fileName";
                $image_name = '/assets/images/training/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            }

            // Handle brochure upload
            $brochure_name = '';
            if (!empty($_FILES['brochure']['name'])) {
               
                $temp = $_FILES['brochure']['tmp_name'];
                $name = $_FILES['brochure']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/brochure/$fileName";
                $brochure_name = '/assets/images/brochure/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            }

            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'image' => $image_name,
                'duration' => $this->input->post('duration'),
                'brochure' => $brochure_name,
                'status' => $this->input->post('status'),
                'created_at' => date("Y-m-d H:i:s"),
                'created_by' => '2' // Replace this with the actual created_by user ID
            );

            $result = $this->training_model->create_training($data);
            if ($result) {
                $this->session->set_flashdata('success', 'Training created successfully.');
                redirect('admin/training');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/training');
            }
        }
    }

    public function edit($id)
    {
        $data['training'] = $this->training_model->get_training_by_id($id);
       // echo "<pre>"; print_r($data['training']); exit;
        $this->load->view('admin/training_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('duration', 'Duration', 'required|max_length[50]');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/training_edit');
        } else {
            // Handle image upload
            $image_name = '';
            if (!empty($_FILES['image']['name'])) {
               
                $temp = $_FILES['image']['tmp_name'];
                $name = $_FILES['image']['name'];
                $fileName = time() . $name;
                $path = "./assets/images/training/$fileName";
                $image_name = '/assets/images/training/'.$fileName;
                $a = move_uploaded_file($temp, $path);
            }else{
            $image_name = $this->input->post('old_image');

            }

        

            // Handle brochure upload
               // Handle brochure upload
               $brochure_name = '';
               if (!empty($_FILES['brochure']['name'])) {
                  
                   $temp = $_FILES['brochure']['tmp_name'];
                   $name = $_FILES['brochure']['name'];
                   $fileName = time() . $name;
                   $path = "./assets/images/brochure/$fileName";
                   $brochure_name = '/assets/images/brochure/'.$fileName;
                   $a = move_uploaded_file($temp, $path);
               }else{
                     $brochure_name = $this->input->post('old_brochure');

               }

            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'image' => $image_name,
                'duration' => $this->input->post('duration'),
                'brochure' => $brochure_name,
                'status' => $this->input->post('status'),
                'created_at' => time(),
                'created_by' => $this->input->post('created_by') // Replace this with the actual created_by user ID
            );

            $result = $this->training_model->update_training($id, $data);
            if ($result) {
                $this->session->set_flashdata('success', 'Training updated successfully.');
                redirect('admin/training');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('admin/training/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->training_model->delete_training($id);
        redirect('admin/training');
    }
}
