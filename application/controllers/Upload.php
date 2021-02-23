<?php

class Upload extends CI_Controller
{
    //security
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Checklist_Task', 'checklist');

    }

    public function index()
    {
            //$this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload($files)
    {

        print_r($files);
        
        // $config['file_name']            = '';
        // $config['upload_path']          = './assets/img/taskImage';
        // $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        // $this->load->library('upload', $config);

        // if ( ! $this->upload->do_upload('file'))
        // {
        //         $error = array('error' => $this->upload->display_errors());

        //        print_r($error);

        //        // $this->load->view('upload_form', $error);
        // }
        // else
        // {
        //         $data = array('upload_data' => $this->upload->data());
                
        // }
    }
   
    
}