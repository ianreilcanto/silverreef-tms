<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checklist_Task extends CI_Model
{

   

    public function add($checklistInfo){

        $data = array(

            "name" => $checklistInfo['checklistname'],
            "checklist_type" => $checklistInfo['checklistType'],
            "schedule_type_id" => $checklistInfo['scheduleType'],
            "department_id" =>$checklistInfo['department'],
            "station_id" => $checklistInfo['station'],//$checklistInfo['station'],
            "isGeneral" => $checklistInfo['isGeneral'],
            "status" => 1
        );


        $this->db->insert('checklist', $data);  

        $insert_id = $this->db->insert_id();

        return $insert_id;

    }

    public function getChecklistByDept($deptId){

        $this->db->select('checklist.id as `id`,checklist.name as `name`, schedule_type.name as `type`, start , end , station_id ');
        $this->db->from('checklist');
        $this->db->join('schedule_type','schedule_type.id = checklist.schedule_type_id');
        $this->db->where('department_id', $deptId);
        $this->db->where('checklist_type', 'daily');
        $result = $this->db->get();

        return $result->result_array();

    }

     public function getAllChecklistByDept($deptId){

        $this->db->select('checklist.id as `id`,checklist.name as `name`, schedule_type.name as `type`, start , end , station_id ');
        $this->db->from('checklist');
        $this->db->join('schedule_type','schedule_type.id = checklist.schedule_type_id');
        $this->db->where('department_id', $deptId);
        $this->db->where('checklist_type', 'daily');
        $result = $this->db->get();

        return $result->result_array();

    }

    //add filter by daily weekly and monthly
    public function getCountChecklistByDept($deptId){

        $this->db->select(' count(checklist.id) as count ');
        $this->db->from('checklist');
        $this->db->join('schedule_type','schedule_type.id = checklist.schedule_type_id');
        $this->db->where('department_id', $deptId);
        $this->db->where('checklist_type', 'daily');
        $result = $this->db->get();

        return $result->result_object()[0]->count;

    }



    public function getWeeklyChecklistByDept($deptId){

        $this->db->select('checklist.id as `id`,checklist.name as `name`, schedule_type.name as `type`, start , end , station_id ');
        $this->db->from('checklist');
        $this->db->join('schedule_type','schedule_type.id = checklist.schedule_type_id');
        $this->db->where('department_id', $deptId);
        $this->db->where('checklist_type', 'weekly');
        $result = $this->db->get();

        return $result->result_array();

    }


    public function addTask($tasks){


        $data = array(

            "name" => $tasks['name'],
            "description" => $tasks['desc'],
            "sec" => $tasks['sec'],
            "checklist_id" => $tasks['checklist'],
            "task_type" => $tasks["taskType"],
            "img_path" => $tasks["img_path"]
        );

        $this->db->insert('task', $data);  

    }

    public function getDaily($schedType,$dept,$station){

        $this->db->select('id,name');
        $this->db->from('checklist');
        $this->db->where('checklist_type', 'daily');
        $this->db->where('schedule_type_id', $schedType);
        $this->db->where('department_id', $dept);
        $this->db->where('station_id', $station);
        $this->db->where('status', 1);


        return $query = $this->db->get()->result_array(); 

    }

    public function getTasks($checklist_id){


        $this->db->select('*');
        $this->db->from('task');
        $this->db->where('checklist_id', $checklist_id);

        return $query = $this->db->get()->result_array(); 

    }

    public function getTaskById($id){
         $this->db->select('*');
        $this->db->from('task');
        $this->db->where('id', $id);

        return $query = $this->db->get()->result_array(); 

    }

}
