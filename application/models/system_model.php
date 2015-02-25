<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class System_model extends CI_Model {
    
    function getMenu() {
        $query = $this->db->get_where('menu', array('parent_id' => '0'));
        //$query = $this->db->get('menu');
        $menu = $query->result();
        foreach ($menu as $item) {
         //echo $item->caption . '<br/>';   
         $query = $this->db->get_where('menu', array('parent_id' => $item->id));
         $childs = $query->result();
         //foreach ($childs as $child)
            //echo '-'.$child->caption . '<br/>';
         $item->child = $childs;
        } 
        return $menu;
    }
}