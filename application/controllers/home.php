<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->output->cache(60);
        $data['NewsList'] = $this->news_model->getNewsByNumber(4);
        $this->template->set('body_class', 'home');
        $this->template->add_title_segment('首頁');
        $this->template->render('home', $data);
    }

    public function irc()
    {
        $this->template->add_title_segment('IRC 頻道');
        $this->template->render('irc/home');
    }
}
