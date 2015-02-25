<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends CI_Controller {
	
    public function showproperty()
    {
        $link = $this->uri->segment(3);
        $this->db->select('property.id, property.name as propname, price, main_img, images, description, sale, rent, bedrooms, area, latitude, longitude, main_img, modify_date, location.name as locationname, type.name as typename, type.marker as marker');	
        $this->db->from('property');
        $this->db->join('location', 'location.id = property.location_id');
        $this->db->join('type', 'type.id = property.type_id');
        $this->db->where('link', $link);
        $property = $this->db->get();
        if ($property->row()->main_img == '')
                $property->row()->main_img = 'noimg.jpg';
        $images = '';
        if ($property->row()->images != '')
                $images = explode(';', $property->row()->images);
        //$test = $images[0];


//Search form data +		
        $this->db->select('id, name');
        $this->db->from('location');
        $this->db->order_by('name');

        $locations = $this->db->get();
        $types = $this->db->get('type');
//Search form data -

//this->twig->display('propertylist.html.twig', array('base_url' => base_url(), 'properties' => $properties->result(), 'parameters' => $data, 'locations' => $locations->result(),
                                                                                                  //'types' => $types->result(), 'pagination' => $this->pagination->create_links(), 'property_url' => site_url('property/showproperty'), 'form_url' => site_url('home/search')));
        $this->load->model('Property_model');
        $this->addViewed($property->row()->id);
        $this->twig->display('property.html.twig', array('base_url' => base_url(), 'property' => $property->row(), 'images' => $images, 'locations' => $locations->result(), 
                                                         'types' => $types->result(), 'form_url' => site_url('home/search'), 'mostrecentprop' => $this->Property_model->getMostRecentProperty(3)));
    }
    
    private function addViewed($property_id)
    {
        $this->load->model('Property_model');
        $this->Property_model->addViewedToProperty($property_id);
    }

}


?>