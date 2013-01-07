<?php

class Downloads extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('file_model');
        $this->load->helper('download');
    }

    public function index()
    {
        //$this->output->cache(60);
        $this->load->model('Projects_model');
        $data['BottomProjectsList'] = $this->Projects_model->getProjectsByNumber(7);
        $this->template->add_title_segment('檔案下載');
        $this->template->render('downloads/home', $data);
    }

    public function file($alias_name)
    {
        $row = $this->file_model->getFileByAlias($alias_name);
        if(!$row)
            header("Location:" . $this->config->site_url());

        $path = Document_root . '/download_files/' .$row['file_name'];

        if(!file_exists($path))
        {
            header("Location:" . $this->config->site_url());
        }
        $data = file_get_contents($path); // Read the file's contents
        $name = $row['file_name'];

        force_download($name, $data);
    }
}
