<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{



    //security
    public function __construct()
    {
        parent::__construct();

        is_logged_in();

        $this->load->model('Checklist_Task', 'checklist');
        $this->load->model('Employee_Task', 'checklistRecord');
        $this->load->model('Department_Station', 'department');


    }

    public function index()
    {
        // echo "<pre>";
        // print_r($_SESSION);

        $data = array(
            "name" => $_SESSION['employee_name'],
            "department" => $_SESSION['department'],
            "position" => $_SESSION['position'],
            //role are for buttons
             "role" => $_SESSION['role'],
        );

        $this->load->view('dashboard/common/header');
        $this->load->view('dashboard/common/topbar');
        $this->load->view('dashboard/employee/main',$data);
        $this->load->view('dashboard/common/footer');

    }

    public function checklist(){

        //task checker : get all taken task and dont display
        $user_id = $_SESSION['user_id'];
        $department_id = $_SESSION['department_id'];
        //add user info on the data
        $data = array(
            "user_id" => $user_id,
            "department_id" => $department_id,
        );

        $checklist = $this->checklist->getChecklistByDept($department_id);

        for ($i=0; $i < count($checklist); $i++) { 
            $tasks = $this->checklist->getTasks($checklist[$i]['id']);
            $checklist[$i]['tasks'] = $tasks;
        }
        
         $nowDate = date("m-d-y");
         $getTaskIdByDept = $this->checklistRecord->getTaskIdByDept($nowDate,$department_id);


        $accomplished_task = array_map(function($a) {  return array_pop($a); }, $getTaskIdByDept);

        $source = $this->department->getStation($department_id);
        $stations = !empty($source) ? $source : null;

        if($stations)
        $hasStation = count($stations) > 0 ? true : false ;

        if($stations){
            $data['stations'] = $stations;
        }

        $data['hasStations'] = isset($hasStation) ? $hasStation : false;
        $data['checklists'] = $checklist;
        $data['accomplished_task'] = $accomplished_task;

        //use department to fetch the checklist
        //if department has station filter the checklist by station
        

         $data['default_station'] = $data['checklists'][0]['station_id'];

         //  echo "<pre>";
         // print_r($data);

        //base_url('auth');
        $this->load->view('dashboard/common/header');
        $this->load->view('dashboard/common/topbar');
        $this->load->view('dashboard/employee/checklist',$data);
        $this->load->view('dashboard/common/footer');

    }

    public function task($task_id){

        // echo "<pre>";
        // print_r($_SESSION);

    //     [department] => F&B
    // [username] => ianreilcanto
    // [email] => test@email.com
    // [contact_number] => 09171635669
    // [employee_name] => Ian Reil Canto
    // [department_id] => 2
    // [position] => supervisor
    // [employee_type_id] => 5
    // [user_id] => 1
    // [role] => manager
    // [access_role] => 3

        $nowDate = date("m-d-y");


        $employee_task = array(
            'image_path' => null,
            'status' => 1,
            'created_date' => $nowDate,
            'task_id' => $task_id,
            'department_id' => $_SESSION['department_id'],
            'employee_id' => $_SESSION['user_id']

        );

        $isCompleted = $this->checklistRecord->checkTask($nowDate,$task_id) > 0 ? true : false; 

        if(!$isCompleted)
            $this->checklistRecord->add($employee_task);
        else
            redirect('dashboard');

        $data = array();
        $tasks = $this->checklist->getTaskById($task_id);

        $data['tasks'] = $tasks;

        $this->load->view('dashboard/common/header');
        $this->load->view('dashboard/common/topbar');
        $this->load->view('dashboard/employee/tasks',$data);
        $this->load->view('dashboard/common/footer');

    }

    public function mytask(){

        $data = array();

        $nowDate = date("m-d-y");
        $tasks = $this->checklistRecord->getByUser($nowDate,$_SESSION['user_id']);

        $data['tasks'] = $tasks;

        //print_r($data);

        // [id]
        // [image_path]
        // [status]
        // [created_date]
        // [task_id]
        // [department_id]
        // [employee_id]
        // [name]
        // [description]
        // [task_type]
        // [sec] 
        // [checklist_id]

        $this->load->view('dashboard/common/header');
        $this->load->view('dashboard/common/topbar');
        $this->load->view('dashboard/employee/mytask',$data);
        $this->load->view('dashboard/common/footer');
    }


}
