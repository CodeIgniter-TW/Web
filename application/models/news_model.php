<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model
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

    public function getNewsByAlias($Alias)
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_alias', $Alias);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $this->db->query("UPDATE ci_news SET news_count=news_count+1 where news_alias='$Alias'");
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
