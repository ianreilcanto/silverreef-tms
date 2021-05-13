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
         $this->load->model('Checklist_Task', 'checklist');
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

    public function reportDaily(){

        $data['title'] = 'Daily';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
            $this->load->view('admin//dashboard/reports', $data);
        $this->load->view('templates/footer');


    }

    public function reportWeekly(){

        $data['title'] = 'Weekly';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
            $this->load->view('admin//dashboard/reports', $data);
        $this->load->view('templates/footer');

    }

    public function reportMonthly(){

        $data['title'] = 'Monthly';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/reports', $data);
        $this->load->view('templates/footer');

    }
    // start new function added Paul 
    public function addLearning(){

        $data['title'] = 'Learning';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/addLearning', $data);
        $this->load->view('templates/footer');
       
       
    }

    public function updateLearning(){

        $data['title'] = 'Learning';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/updateLearning', $data);
        $this->load->view('templates/footer');
       
       
    }
    public function editChecklist(){

        $data['title'] = 'EditChecklist';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin//dashboard/editChecklist', $data);
        $this->load->view('templates/footer');
       
    }

    public function addTask(){

        $data['title'] = 'AddTask';

        $this->load->view('admin//dashboard/addTask');
        
    }
        //end function added Paul
    public function editParent(){

        $data['title'] = 'EditParent';

        $this->load->view('admin//dashboard/editParent');
    }




}
