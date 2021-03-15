<?php

class Employee extends CI_Controller
{
    //security
    public function __construct()
    {
        parent::__construct();
         $this->load->model('Employee_Model', 'employee');
    }


    public function add(){


    	$info = $_POST['info'];
    	$credentials = $_POST['credentials'];



    	$data = array(

    		'first_name' => $info['fname'],
    		'middle_name' => $info['mname'],
    		'last_name' => $info['lname'],
    		'address' => $info['birthDate'],
    		'city' => $info['address'],
    		'province' => $info['city'],
    		'country' => $info['country'],
    		'zipcode' => $info['zipcode'],
    		'start_date' => $info['startDate'],
    		'department_id' => $info['department'],
    		'employee_type_id' => $info['position'],
    		'is_active' => 1
    	);



    	$employee_id = $this->employee->add($data);


    	$this->add_credentials($employee_id,$credentials);


    	echo $employee_id;

    }

 //    private function hash_password($password){
 //   		return password_hash($password, PASSWORD_BCRYPT);
	// }

    public function add_credentials($employee_id,$credentials){



    	$data = array(

    		'username' => $credentials['username'],
    		'password' => hash_password($credentials['password']),
    		'email' => $credentials['email'],
    		'contact_number' => $credentials['contactNumber'],
    		'employee_id' => $employee_id
    	);


    	$this->employee->add_credentials($employee_id,$data);

    }

    

}