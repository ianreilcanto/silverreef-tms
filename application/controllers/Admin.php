<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    //security
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();

         $this->load->model('Department_Station', 'department');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
       // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }



    public function department(){

        $data['title'] = 'Department';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/department');
        $this->load->view('templates/footer');
    }

    public function employee(){


        $data['title'] = 'Employee';


        $departments = $this->department->getDepartment();

        $data['departments'] = $departments;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/employee',$data);
        $this->load->view('templates/footer');

    }

    public function employeeSchedule(){
        $data['title'] = 'Employee';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/employee');
        $this->load->view('templates/footer');
    }

    public function schedule(){

        $data['title'] = 'Schedule';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/schedule');
        $this->load->view('templates/footer',$data);

    }

    public function checklist(){

        $data['title'] = 'Checklist';

        $departments = $this->department->getDepartment();

        $data['departments'] = $departments;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/checklist', $data);
        $this->load->view('templates/footer');
    }


}
