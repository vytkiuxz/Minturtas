<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property_model extends CI_Model {
    
    function getMostRecentProperty($count)
    {
        $this->db->select('property.name, link, price, area, sale, rent, reduced_price, short_description, bedrooms, main_img, location.name as locationname');
        $this->db->from('property');
        $this->db->join('location', 'location.id = property.location_id');
        $this->db->order_by('modify_date', 'desc');
        if ($count != 0)
            $this->db->limit($count,  0);
        $properties = $this->db->get();
        return $properties->result();
    }
    
    function getFeaturedProperties($count)
    {
        $this->db->select('property.name, link, price, area, bedrooms, sale, rent, reduced_price, short_description, main_img, location.name as locationname');
        $this->db->from('property');
        $this->db->join('location', 'location.id = property.location_id');
        $this->db->where('featured', 1);
        $this->db->order_by('modify_date', 'desc');
        if ($count != 0)
            $this->db->limit($count,  0);
        $properties = $this->db->get();
        return $properties->result();
    }
    
    function addViewedToProperty($property_id)
    {
        $query = "UPDATE property SET viewed = viewed + 1 WHERE id = ?";
        $this->db->query($query, $property_id);
    }
}