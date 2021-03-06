<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_Task extends CI_Model
{

    public function add($employee_task){

         $this->db->insert('employee_task', $employee_task);  

         return $this->db->affected_rows();

    }

     public function getByUser($nowDate,$user_id){


        $this->db->select('employee_task.id as `id`, employee_task.img_path as `img_path`, employee_task.status as `status`, employee_task.created_date as `created_date`, employee_task.task_id as `task_id`,  task.name as `task_name`, task.description as `task_desc`, task.task_type as `task_type`,`task.isRepairable` as `isRepairable`,schedule_type.name as `schedule_type`  ');
        $this->db->from('employee_task');
        $this->db->join('task','task.id = employee_task.task_id');
        $this->db->join('checklist','checklist.id = task.checklist_id');
        $this->db->join('schedule_type','schedule_type.id = checklist.schedule_type_id');
        $this->db->where('created_date', $nowDate);
        $this->db->where('employee_id', $user_id);

        return $query = $this->db->get()->result_array(); 

    }

     public function getGenTaskIdByEmp($nowDate,$empId){


        // use in array for checking and displaying checklist task
        $this->db->select('task_id');
        $this->db->from('employee_task');
        $this->db->join('task','task.id = employee_task.task_id');
        $this->db->join('checklist','checklist.id = task.checklist_id');
        $this->db->where('checklist.isGeneral', 1);
        $this->db->where('created_date', $nowDate);
        $this->db->where('employee_task.employee_id', $empId);

        return $query = $this->db->get()->result_array(); 

    }

    public function getTaskIdByDept($nowDate,$dept){


        // use in array for checking and displaying checklist task
        $this->db->select('task_id');
        $this->db->from('employee_task');
        $this->db->join('task','task.id = employee_task.task_id');
        $this->db->join('checklist','checklist.id = task.checklist_id');
        $this->db->where('checklist.isGeneral', 0);
        $this->db->where('created_date', $nowDate);
        $this->db->where('employee_task.department_id', $dept);

        return $query = $this->db->get()->result_array(); 

    }

    public function countCompletedTask($nowDate,$dept){


        // use in array for checking and displaying checklist task
        $this->db->select('task_id');
        $this->db->from('employee_task');
        $this->db->join('task','task.id = employee_task.task_id');
        $this->db->join('checklist','checklist.id = task.checklist_id');
        $this->db->where('checklist.checklist_type', 'daily');
        $this->db->where('created_date', $nowDate);
        $this->db->where('employee_task.department_id', $dept);

        return $query = $this->db->get()->result_array(); 

    }

    public function checkTask($nowDate, $task_id){

        $this->db->select('*');
        $this->db->from('employee_task');
        $this->db->where('task_id', $task_id);
        $this->db->where('created_date', $nowDate);

        return $query = $this->db->get()->num_rows(); 

    }

    public function checker($nowDate){

        $this->db->select('*');
        $this->db->from('employee_task');
        $this->db->join('task','task.id = employee_task.task_id');
        $this->db->where('created_date', $nowDate);

        return $query = $this->db->get()->result_array(); 

    }

    public function uploadImage($data){

        $this->db->set('img_path',$data['img_path']);
        $this->db->where('id', $data['id']);
        $this->db->update('employee_task');
        $this->db->trans_complete();

        return $this->db->affected_rows();
    }

}
