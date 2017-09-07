
+<?php
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

class Item_model extends CI_Model {

   /**
    * Get all item data
    *
    * @param       null
    * @return      array
    */

   public function get_items()
   {
       $query = $this->db->select('*')->from('items')->get();
       return $query->result_array();
   }

   /**
    * Get specific item data
    *
    * @param       item_id
    * @return      array
    */
   public function get_item($item_id)
   {
       $query = $this->db->select('*')->from('items')->where('id', $item_id)->get();
       return $query->result_array();
   }

   /**
    * Get all item data
    *
    * @param       null
    * @return      array
    */
   public function save_item_data($data)
   {
       $mode = $data['mode'];
       unset($data['mode']);

       if ($mode == 'add') {
           if ( ! $this->db->insert('items', $data)) {
              return [
                  'status'  => 'error',
                  'message' => 'Unable to '.$mode.' item, Please try again.'
              ];
           }
       }

       if ($mode == 'edit') {
           $id = $data['id'];
           unset($data['id']);

           $this->db->where('id', $id);
           if ( ! $this->db->update('items', $data)) {
              return array(
                 'status'  => 'error',
                 'message' => 'Unable to '.$mode.' item, Please try again.'
              );
           }
       }

       return [
           'status'  => 'success',
           'message' => 'Successfully '.$mode.' item details.'
       ];
   }
}