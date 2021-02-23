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
    public function upload_image($file,$filename) {


            if(isset($file["type"]))
            {
              $validextensions = array("jpeg", "jpg", "png");
              $temporary = explode(".", $file["name"]);
              $file_extension = end($temporary);

              if ((($file["type"] == "image/png") ||($file["type"] == "image/jpg") || 
                 ($file["type"] == "image/jpeg") ) && 
                 ($file["size"] < 100000) && 
                  in_array($file_extension, $validextensions)){
                 if ($file["error"] > 0)
                  {
                      echo "Return Code: " . $file["error"] . "<br/><br/>";
                  } else {
                    $sourcePath = $file['tmp_name'];
                    //change file name and add department folder
                    $targetPath = './assets/img/taskImage/' . $filename; // The Target path where file is to be stored
                    move_uploaded_file($sourcePath,$targetPath); // Moving Uploaded file
                    echo "asd";
                  }
              }
        }else{
            echo "no image";
        }
    }

    public function add_task(){

        $date = new DateTime();


        $data = json_decode($_POST['tasklist'],true);

        $filename = $date->getTimestamp().'-'.$data['department'].'-'.$data['checklist'].'-'.$_FILES['task-file']['name'];

        $data['img_path'] = '/taskImage/'.$date->getTimestamp().'-'.$data['department'].'-'.$data['checklist'].'-'.$_FILES['task-file']['name'];

        $this->upload_image($_FILES['task-file'],$filename);


    	//foreach ($tasks as $task) {
	
    			$this->checklist->addTask($data);

    	//}

    }

    public function getAllChecklistByDept(){

        $result = $this->checklist->getAllChecklistByDept($_POST['deptId']);

        //print_r($result);

        echo json_encode($result);
    }



























    
    

}