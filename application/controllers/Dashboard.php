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
            //role are for buttons˜
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

         $getGenTaskIdByEmp = $this->checklistRecord->getGenTaskIdByEmp($nowDate,$_SESSION['user_id']);
         $getTaskIdByDept = $this->checklistRecord->getTaskIdByDept($nowDate,$department_id);


        $general_accomplished_task = array_map(function($a) {  return array_pop($a); }, $getGenTaskIdByEmp);
        $dept_accomplished_task = array_map(function($a) {  return array_pop($a); }, $getTaskIdByDept);

        $accomplished_task = array_merge($general_accomplished_task,$dept_accomplished_task);

         //print_r($accomplished_task);

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


        
        if(count($data['checklists']) > 0)
         $data['default_station'] = $data['checklists'][0]['station_id'];

         //  echo "<pre>";
         // print_r($data);

        // //base_url('auth');
        $this->load->view('dashboard/common/header');
        $this->load->view('dashboard/common/topbar');
        $this->load->view('dashboard/employee/checklist',$data);
        $this->load->view('dashboard/common/footer');

    }

    public function weeklyChecklist(){

        //task checker : get all taken task and dont display
        $user_id = $_SESSION['user_id'];
        $department_id = $_SESSION['department_id'];
        //add user info on the data
        $data = array(
            "user_id" => $user_id,
            "department_id" => $department_id,
        );

        $checklist = $this->checklist->getWeeklyChecklistByDept($department_id);

        for ($i=0; $i < count($checklist); $i++) { 
            $tasks = $this->checklist->getTasks($checklist[$i]['id']);
            $checklist[$i]['tasks'] = $tasks;
        }
        
         $nowDate = date("m-d-y");

         $getGenTaskIdByEmp = $this->checklistRecord->getGenTaskIdByEmp($nowDate,$_SESSION['user_id']);
         $getTaskIdByDept = $this->checklistRecord->getTaskIdByDept($nowDate,$department_id);


        $general_accomplished_task = array_map(function($a) {  return array_pop($a); }, $getGenTaskIdByEmp);
        $dept_accomplished_task = array_map(function($a) {  return array_pop($a); }, $getTaskIdByDept);

        $accomplished_task = array_merge($general_accomplished_task,$dept_accomplished_task);

         //print_r($accomplished_task);

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

            
        if($checklist)
            $data['default_station'] = $data['checklists'][0]['station_id'];
        else
            $data['default_station'] = 0;

         //  echo "<pre>";
         // print_r($data);

        //base_url('auth');
        $this->load->view('dashboard/common/header');
        $this->load->view('dashboard/common/topbar');
        $this->load->view('dashboard/employee/weeklyChecklist',$data);
        $this->load->view('dashboard/common/footer');

    }

    public function task($task_id){

        // echo "<pre>";
        // print_r($_SESSION);

        // [department] => F&B
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
        $nowTime = date("h:i:sa");


        $employee_task = array(
            'image_path' => null,
            'status' => 1,
            'created_date' => $nowDate,
            'created_time' => $nowTime,
            'task_id' => $task_id,
            'department_id' => $_SESSION['department_id'],
            'employee_id' => $_SESSION['user_id']

        );

        //$isCompleted = $this->checklistRecord->checkTask($nowDate,$task_id) > 0 ? true : false; 

        //if(!$isCompleted)
        $this->checklistRecord->add($employee_task);
        // else
        //     redirect('dashboard');

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


    public function test(){
        require_once 'vendor/autoload.php';
      $textko = new Textko\Sms('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNjZmMGY0MDYyMDFhNjNjNWFmYzk3MDBhMGIyNTk5ODAyZjM5NDcyZjk1YWNjMDMwNDMzNzZmYjkyMzIzZDVhODE3MzQzMDYzZTRmZTMyNTQiLCJpYXQiOjE2MTE2MDIwMzIsIm5iZiI6MTYxMTYwMjAzMiwiZXhwIjoxNjQzMTM4MDMyLCJzdWIiOiIxMzE2NyIsInNjb3BlcyI6W119.n7sh0NerTGiaXZCTBbGJllmRZpkuxEd8CPj5UEcsLvLhjXrGr5sZEORIvKee93mTCKvv8iW6mCO5dQWHNlk2AGFmVg4MHxbicaBZV72VqRgEk01T4uMg37MtP_H-bcHYEBdHUS5iIrLvX3yWl0Kl4kqxK3LEhFlGnNPgQH9uA0s_1mI0_BnBYzDuegn276MU7xLsUWFXZKwXfZZMk4sM_UMbMhjygSX7-s8Vzm9GAkWbRIaBvX4McNdoWzgmBw74ArMFe2MUDioOeL_YNJsBCvcJaz7MV3xIk6AtqOp4RXuRwb0s38YZhHI9ye2GbpFO5d5U4iFfjjiCl8Y7k6phDMO1hVknCLaxKK1oOG3KvmU1-qGyCoidiZkCwqyq_Btp9RBIITOVSY2_-hjVWYuPK7c2gKaliLzJCv2lC0-uSFaIu1YcfOgkbFTPRPhIGfUwVJd6HRNnmhlVgziv6fkmcT_qNSOlSvZyxIKNtbg0BXloyab19YRhAgly43IYzG0hWqAQkRJKMknmfQayRFnUQoy-fwpOYzRc9VFCs2ZaZEkUIfI0Tjyh3yGIBCsnr0TIvrc9sO6UrwMUodnyq2TkbJt5iyaN3hvXhs8dpBSfZXDZuydD58YXN4okEvl2oQoJmz7m-HUAcoITjyahen3c3erL71Sw7Jw3Cw5dXSpHQc8');

      $sms = $textko->send('09171635669', 'test');
    }

}
