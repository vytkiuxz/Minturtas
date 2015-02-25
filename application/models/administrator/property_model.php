<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property_model extends CI_Model {
    
    function getPropertyList()
    {
        $this->db->select('property.id, property.link, property.name, property.price, property.modify_date, type.name as type, location.name as location');
        $this->db->from('property');
        $this->db->join('type', 'type.id = property.type_id'); 
        $this->db->join('location', 'location.id = property.location_id');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}