<?php

class Blog extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->template->set('body_class', 'news');
    }

    public function index()
    {
        $this->template->add_title_segment('部落格消息');
        $this->viewbypage(0);
    }

    public function viewbyalias($Alias)
    {
        $this->output->cache(60);

        $data['NewsItem'] = $this->news_model->getNewsByAlias($Alias);

        if (empty($data['NewsItem']))
        {
            $this->viewbypage(0);
            return;
        }

        $data['NewsList'] = $this->news_model->getNewsByNumber(15);

        $this->template->add_title_segment($data['NewsItem']['news_title']);
        $this->template->render('blog/view', $data);
    }

    public function viewbypage($Page)
    {
        $this->load->library('pagination');

        $this->output->cache(60);

        $config['base_url'] = base_url().'blog/';
        $config['total_rows'] = $this->db->count_all('news');
        $config['per_page'] = 5;
        $config['first_link'] = '&laquo; 第一頁';
        $config['last_link'] = '最後一頁 &raquo;';
        $this->pagination->initialize($config);

        $data['NewsList'] = $this->news_model->getNews($config['per_page'], $Page);
        $data['LastNewsList'] = $this->news_model->getNewsByNumber(15);
        $data['Pages'] = $this->pagination->create_links();
        $data['NewsTitle'] = '';

        $this->template->render('blog/home', $data);
    }
}
