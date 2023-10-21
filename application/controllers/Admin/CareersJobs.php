<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareersJobs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CareersJobsModel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['jobs'] = $this->CareersJobsModel->getJobs();
        $this->load->view('jobs_list', $data);
    }

    public function create()
    {
        $this->load->view('job_create');
    }

    public function store()
    {
        $this->form_validation->set_rules('position', 'Position', 'required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('job_create');
        } else {
            $data = array(
                'position' => $this->input->post('position'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')
            );

            $result = $this->CareersJobsModel->createJob($data);

            if ($result) {
                $this->session->set_flashdata('success', 'Job created successfully.');
                redirect('careersjobs');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('careersjobs');
            }
        }
    }

    public function edit($id)
    {
        $data['job'] = $this->CareersJobsModel->getJobById($id);
        $this->load->view('job_edit', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('position', 'Position', 'required|max_length[500]');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required|in_list[1,2,3]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('job_edit');
        } else {
            $data = array(
                'position' => $this->input->post('position'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')
            );

            $result = $this->CareersJobsModel->updateJob($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Job updated successfully.');
                redirect('careersjobs');
            } else {
                $this->session->set_flashdata('error', 'Error Occurred');
                redirect('careersjobs/edit/' . $id);
            }
        }
    }

    public function delete($id)
    {
        $this->CareersJobsModel->deleteJob($id);
        redirect('careersjobs');
    }
}
