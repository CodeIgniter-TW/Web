<?php

class File_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getNewsByNumber($Number)
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by("news_date", "desc");
        $this->db->limit($Number);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getNewsById($Id)
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_id', $Id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

        return null;
    }

    public function getFileByAlias($alias)
    {
        $this->db->select('*');
        $this->db->from('file');
        $this->db->where('file_alias', $alias);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $this->db->query("UPDATE ci_file SET file_count = file_count+1 where file_alias = '$alias'");
            return $query->row_array();
        }
        return null;
    }

    public function getNews($num, $offset)
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by("news_date", "desc");
        $this->db->limit($num, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }
}
