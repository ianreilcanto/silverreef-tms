<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_Model extends CI_Model
{

   public function add($employee){
      


      $this->db->insert('employee', $employee);  

      $insert_id = $this->db->insert_id();


      return $insert_id;


   }


   public function add_credentials($employee_id,$credentials){


      $this->db->insert('credentials', $credentials);  


   }

   public function get($id){

        // select access_role.name, employee.first_name from employee 
        // join employee_type 
        // join access_role
        // where employee_type.id = employee.employee_type_id 
        // and access_role.id = employee_type.access_role_id

        $this->db->select('employee.id as `user_id`,concat(employee.first_name," ",employee.last_name) as `name`,department.name as `department`,employee.department_id, employee_type.name as `position`,employee.employee_type_id as `employee_type_id`, access_role.name as `role`');
        $this->db->from('employee');
        //join imployee type and get access role
        $this->db->join('employee_type','employee_type.id = employee.employee_type_id');
        $this->db->join('department','department.id = employee.department_id');
        $this->db->join('access_role','access_role.id = employee_type.access_role_id');
        $this->db->where('employee.id', $id);

        return $query = $this->db->get()->result_array(); 

   }

}
