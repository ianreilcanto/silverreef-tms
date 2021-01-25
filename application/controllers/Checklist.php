<?php

class Checklist extends CI_Controller
{
    //security
    public function __construct()
    {
        parent::__construct();

         $this->load->model('Checklist_Task', 'checklist');
         $this->load->model('Department_Station', 'department');


    }


    public function add(){

    	$data = $this->input->post();


    	$insertid = $this->checklist->add($data['checklistInfo']);

    	//checklistTasks


    	//$this->add_task($data['checklistTasks'],$insertid);

    	echo $insertid;


    }

    public function add_task(){




    	//foreach ($tasks as $task) {
	
    			$this->checklist->addTask($_POST['task']);

    	//}

    }

    public function daily($schedType,$dept){

        //sample link
        //http://taskmanangement.test/checklist/daily/opening/2

        $data = array();
        $checklistTasks = array();

        //to be refactor on getting the type
        $type = ( strtoupper($schedType) == 'OPENING' ) ? 1 : 2;


        //opening has id of 1 in the database
        //$schedule_type = 1;

        $data["sched_type"] = strtoupper($schedType);
        $data["dept"] = $this->department->getById($dept);
        $data['station'] = null;


        $checklists = $this->checklist->getDaily($type,$dept,0);

        foreach ($checklists as $checklist) {
             $task = $this->checklist->getTasks($checklist['id']);

             array_push($checklistTasks, array( $checklist['name'] => $task) );
        }

       //echo $type;
        $employees = $this->department->getEmployee();

        $data["checklists"] = $checklistTasks;
        $data["employees"] =  $employees;

        // foreach ($data["checklists"] as $test) {
        //     foreach ($test as $key => $test2) {
        //             echo "<pre>".$key."<br>";
        //             print_r($test2);

        //     }
        // }

        // echo "<pre>";
        // print_r($employee);


       $this->load->view('checklist/checklist_view', $data );

    }


    public function dailyReport($schedType,$dept){

    	$data = array();
        $checklistTasks = array();

        //to be refactor on getting the type
        $type = ( strtoupper($schedType) == 'OPENING' ) ? 1 : 2;


        //opening has id of 1 in the database
        //$schedule_type = 1;

        $data["sched_type"] = strtoupper($schedType);
        $data["dept"] = $this->department->getById($dept);
        $data['station'] = null;


        $checklists = $this->checklist->getDaily($type,$dept,0);

        foreach ($checklists as $checklist) {
             $task = $this->checklist->getTasks($checklist['id']);

             array_push($checklistTasks, array( $checklist['name'] => $task) );
        }

       //echo $type;

        $employees = $this->department->getEmployee();

        $data["checklists"] = $checklistTasks;

        // foreach ($data["checklists"] as $test) {
        //     foreach ($test as $key => $test2) {
        //             echo "<pre>".$key."<br>";
        //             print_r($test2);

        //     }
        // }

        // echo "<pre>";
        // print_r($employee);


       $this->load->view('checklist/checklist_report', $data );

    

    }

    public function getChecklistByDept(){

        $result = $this->checklist->getChecklistByDept($_POST['deptId']);

        //print_r($result);

        echo json_encode($result);
    }



























    
    

}