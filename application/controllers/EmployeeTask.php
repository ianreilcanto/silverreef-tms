<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class EmployeeTask extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Employee_Task', 'checklistRecord');
    }
    public function index()
    {
                
    }

    public function upload_emplyee_task_image(){

        print_r($_FILES);

        $date = new DateTime();

        $data = json_decode($_POST['uploadData'],true);
        $file = $_FILES['reportImage'.$data['id']];

        $filename = $date->getTimestamp().'-'.$data['id'].'-'.$file['name'];
        $data['img_path'] = '/reportImage/'.$filename;


        if($this->checklistRecord->uploadImage($data) > 0){
            $this->upload_image($file,$filename);
            echo 'success';
        }else{
            echo 'failed';
        }


     
      
    }

    public function upload_image($file,$filename) {

      

        if(isset($file["type"]))
        {
           
          $validextensions = array("jpeg", "jpg", "png","PNG","JPEG","JPG");
          $temporary = explode(".", $file["name"]);
          $file_extension = end($temporary);

        //   if ((($file["type"] == "image/png") ||($file["type"] == "image/jpg") || ($file["type"] == "image/jpeg") )&& ($file["size"] < 100000) && in_array($file_extension, $validextensions)){

            echo "here i am has image uploaded";

             if ($file["error"] > 0)
              {
                  echo "Return Code: " . $file["error"] . "<br/><br/>";
              } else {
                $sourcePath = $file['tmp_name'];
                //change file name and add department folder
                $targetPath = './assets/img/reportImage/' . $filename; // The Target path where file is to be stored
                //move_uploaded_file($sourcePath,$targetPath); // Moving Uploaded file
                $this->compressImage($sourcePath,$targetPath,60);
               
              }
          //}
        }else{
            echo "no image";
        }
    }

    function compressImage($source, $destination, $quality) {

        $info = getimagesize($source);
      
        if ($info['mime'] == 'image/jpeg') 
          $image = imagecreatefromjpeg($source);
      
        elseif ($info['mime'] == 'image/gif') 
          $image = imagecreatefromgif($source);
      
        elseif ($info['mime'] == 'image/png') 
          $image = imagecreatefrompng($source);
      
        imagejpeg($image, $destination, $quality);
      
      }


}
        
