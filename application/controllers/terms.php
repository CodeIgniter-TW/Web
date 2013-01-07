<?php

class Terms extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->template->set('body_class', 'news');
    }

    function index($Alias = '')
    {
        $this->output->cache(60);

        $data['NewsList'] = $this->news_model->getNewsByNumber(15);

        switch ($Alias)
        {
            case 'privacy_policy':
                $data['NewsTitle'] = '隱私政策';
                $this->template->add_title_segment('隱私政策');
                $this->template->render('terms/privacy_policy', $data);
                break;
            case 'trademarks':
                $data['NewsTitle'] = '商標';
                $this->template->add_title_segment('商標');
                $this->template->render('terms/trademarks', $data);
                break;
            default:
                $data['NewsTitle'] = '服務條款';
                $this->template->add_title_segment('服務條款');
                $this->template->render('terms/home', $data);
        }
    }
}
