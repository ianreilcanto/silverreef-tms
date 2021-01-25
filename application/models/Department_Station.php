<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Department_Station extends CI_Model
{

   public function getDepartment(){

        $this->db->select('*');
        $this->db->from('department');
        $result = $this->db->get();

        return $result->result_array();
   }

   //  public function getDepartmentById($id){

   //      $this->db->select('*');
   //      $this->db->from('department');
   //       $this->db->where('id',$id);
   //      $result = $this->db->get();

   //      return $result->result_array();
   // }



   public function getStation($deptId){

      $this->db->select('*');
      $this->db->from('station');
      $this->db->where('department_id',$deptId);
      $result = $this->db->get();

      return $result->result_array();

   }

   //employee type
   public function getPosition($deptId){

      $this->db->select('*');
      $this->db->from('employee_type');
      $this->db->where('department_id',$deptId);
      $result = $this->db->get();

      return $result->result_array();


   }

}
