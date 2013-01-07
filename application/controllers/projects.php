<?php

class Projects extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['ProjectsList'] = $this->projects_model->getProjects();
        $this->template->add_title_segment('專案網站列表');
        $this->template->render('projects/home', $data);
    }

    public function submit()
    {
        $this->template->add_title_segment('送出您的專案網站');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', '網站名稱', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('url', '網站地址', 'trim|required|min_length[8]|max_length[190]|callback__url_check');
        $this->form_validation->set_rules('description', '網站描述', 'trim|required|max_length[1024]');

        if ($this->form_validation->run() == FALSE)
        {
            $data['ProjectsList'] = $this->projects_model->getProjects();
            $data['Title'] = $this->input->post('title');
            $data['Url'] = $this->input->post('url');
            $data['Description'] = $this->input->post('description');
            $this->template->render('projects/submit', $data);
        }
        else
        {
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $description = $this->input->post('description');
            $this->projects_model->submit($title, $url, $description);
            redirect('projects/thankyou');
        }
    }

    public function thankyou()
    {
        $this->template->add_title_segment('感謝您的提交');
        $data['ProjectsList'] = $this->projects_model->getProjects();
        $this->template->render('projects/thankyou', $data);
    }

    public function _url_check($str)
    {
        if (preg_match("/^http:\/\//i", $str))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('_url_check', '%s 不是 URL。');
            return FALSE;
        }
    }
}
