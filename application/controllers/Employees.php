<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Some class description here...
*
* @package     TRY
* @subpackage  subpackage
* @category    category
* @author      rosemarie.daludado@systemantech.com
* @link        http://systemantech.com
*/
class Employees extends CI_Controller {

   function __construct()
   {
       parent::__construct();
                    $this->load->model('employee_model');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
         $this->form_validation->set_rules('first_name', 'First Name', 'required');
                $this->form_validation->set_rules('middle_name', 'Middle Name', 'required');
                $this->form_validation->set_rules('last_name', 'Last Name', 'required');
             

                if ($this->form_validation->run() == FALSE){

                }


                /*
                {
                        $this->load->view('forms/employee-add');
                }
                else
                {
                        $this->load->view('employees/save');
                }
                */
    

   }



   /**
    * Some description here
    *
    * @param       param
    * @return      return
    */
   public function index()
   {
       $data['employees'] = $this->employee_model->get_employees();
       $this->load->view('pages/employee-view', $data);

   }

   /**
    * Load add employee form
    *
    * @param       param
    * @return      return
    */
   public function add()
   {
       $this->load->view('forms/employee-add');

         
   }

   /**
    * Some description here
    *
    * @param       param
    * @return      return
    */
   public function edit($employee_id)
   {
       $data['employee_id'] = $employee_id;
       $data['employee'] = $this->employee_model->get_employee($employee_id);
       var_dump($this->db->last_query());
       $this->load->view('forms/employee-edit', $data);
   }

   /**
    * Some description here
    *
    * @param       param
    * @return      return
    */
   public function save()
   {
       $post = $this->input->post();
       // var_dump($post); exit;
       $result = $this->employee_model->save_employee_data($post);
       echo $result['message'];
       echo '<br>';
       echo anchor('employees/index', 'View List');
   }

}