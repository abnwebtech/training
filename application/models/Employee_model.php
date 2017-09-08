
+<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Employee_model extends CI_Model {

   /**
    * Get all employee data
    *
    * @param       null
    * @return      array
    */

   public function get_employees()
   {
       $query = $this->db->select('*')->from('employees')->get();
       return $query->result_array();
   }

   /**
    * Get specific employee data
    *
    * @param       employee_id
    * @return      array
    */
   public function get_employee($employee_id)
   {
       $query = $this->db->select('*')->from('employees')->where('id', $employee_id)->get();
       return $query->result_array();
   }

   /**
    * Get all employee data
    *
    * @param       null
    * @return      array
    */
   public function save_employee_data($data)
   {
       $mode = $data['mode'];
       unset($data['mode']);

       if ($mode == 'add') {
           if ( ! $this->db->insert('employees', $data)) {
              return [
                  'status'  => 'error',
                  'message' => 'Unable to '.$mode.' employee, Please try again.'
              ];
           }
       }

       if ($mode == 'edit') {
           $id = $data['employee_id'];
           unset($data['employee_id']);

           $this->db->where('id', $id);
           if ( ! $this->db->update('employees', $data)) {
              return array(
                 'status'  => 'error',
                 'message' => 'Unable to '.$mode.' employee, Please try again.'
              );
           }
       }

       return [
           'status'  => 'success',
           'message' => 'Successfully '.$mode.' employee details.'
       ];
   }
}