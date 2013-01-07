<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProjects()
    {
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->where('project_verify', true);
        $this->db->order_by('project_date', 'desc');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getProjectsByNumber($Number)
    {
        $this->db->select('*');
        $this->db->from('projects');
        $this->db->where('project_verify', true);
        $this->db->order_by('rand()');
        $this->db->limit($Number);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function submit($title, $url, $description)
    {
        $data = array(
            'project_name' => $title,
            'project_url' => $url,
            'project_description' => $description,
            'project_verify' => 0,
            'project_date' => date('Y-m-d H:i:s')
        );

        $this->db->insert('projects', $data);
    }
}
