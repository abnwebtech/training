<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Some class description here...
*
* @package     KAWANI
* @subpackage  subpackage
* @category    category
* @author      cristhian.kevin@systemantech.com
* @link        http://systemantech.com
*/
class Items extends CI_Controller {

   function __construct()
   {
       parent::__construct();

       $this->load->model('item_model');
        $this->load->helper('url');
   }

   /**
    * Some description here
    *
    * @param       param
    * @return      return
    */
   public function index()
   {
       $data['items'] = $this->item_model->get_items();
       $this->load->view('pages/item-view', $data);
   }
   /**
    * Load add item form
    *
    * @param       param
    * @return      return
    */
   public function add()
   {
       $this->load->view('forms/item-add');
   }

   /**
    * Some description here
    *
    * @param       param
    * @return      return
    */
   public function edit($item_id)
   {
       $data['item_id'] = $item_id;
       $data['item'] = $this->item_model->get_item($item_id);
       var_dump($this->db->last_query());
       $this->load->view('forms/item-edit', $data);
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
       $result = $this->item_model->save_item_data($post);
       echo $result['message'];
       echo '<br>';
       echo anchor('items/index', 'View List');
   }

}