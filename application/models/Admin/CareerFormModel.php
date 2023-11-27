<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CareerFormModel extends CI_Model
{
    public function getCareerFormSubmissions($status)
    {
        $this->db->select('*');
        $this->db->from('career_form');
        $this->db->join('careers_jobs', 'careers_jobs.id = career_form.career_id', 'inner');
        $this->db->where('career_form.status',$status);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function get_by_id($id)
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
