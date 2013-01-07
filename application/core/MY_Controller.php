<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Core Controller
 *
 * @author Bo-Yi Wu <appleboy.tw@gmail.com>
 */
class MY_Controller extends CI_Controller
{
    /**
     * __construct
     *
     * @return void
     **/
    public function __construct()
    {
        parent::__construct();
        // load template library
        $this->load->spark('codeigniter-template/1.0.1');
        $this->load->library('template');
        $this->load->helper('url');
        $this->load->model(array('news_model', 'projects_model'));
        $this->template->set('body_class', $this->uri->segment(1));
        $this->template->set('BottomProjectsList', $this->projects_model->getProjectsByNumber(16));
    }
}
