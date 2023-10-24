<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareerFormModel extends CI_Model
{
    public function getCareerFormSubmissions()
    {
        return $this->db->get('career_form')->result_array();
    }

    public function getCareerFormSubmissionById($id)
    {
        return $this->db->get_where('career_form', array('id' => $id))->row_array();
    }

    public function createCareerFormSubmission($data)
    {
        return $this->db->insert('career_form', $data);
    }

    public function updateCareerFormSubmission($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('career_form', $data);
    }

    public function deleteCareerFormSubmission($id)
    {
        return $this->db->delete('career_form', array('id' => $id));
    }
}
