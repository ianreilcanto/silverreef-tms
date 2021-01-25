<?php

class Department extends CI_Controller
{
    //security
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Department_Station', 'department');
    }


    public function getStation(){

    	$result =  $this->department->getStation($_POST['deptId']);


    	echo json_encode($result);

    }
   
     public function getPosition(){

        //print_r($_POSt);

        $result =  $this->department->getPosition($_POST['deptId']);


        echo json_encode($result);

    }



}