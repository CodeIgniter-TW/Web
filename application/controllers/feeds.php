<?php

class Feeds extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function rss()
    {
        $this->output->cache(60);
        $this->load->model('news_model');
        $this->output->set_header('Content-type: text/xml');
        $this->output->set_header('Cache-Control: no-cache, must-revalidate');
        $this->output->set_header('Expires: Mon, 26 Jul 2000 05:00:00 GMT');

        $data['NewsList'] = $this->news_model->getNewsByNumber(10);

        $this->load->view('feeds/home', $data);
    }
}
