<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
         parent::__construct();
         $this->load->model('system_model');
         $menu = $this->system_model->getMenu();
         //get your data
         
         $this->twig->add_global('menu', $menu);
         $this->twig->add_global('base_url', base_url());
         $this->twig->add_global('form_url', site_url('home/search'));
         $this->twig->add_global('showorderform', true);
         $this->twig->add_global('mostrecentprop', $this->mostRecentProperty(3));
     }  
    
    public function index()
    {
        /*$this->load->model('system_model');
        $menu = $this->system_model->getMenu();*/
       
        $this->db->select('id, name');
        $this->db->from('location');
        $this->db->order_by('name');
        $locations = $this->db->get();
        $types = $this->db->get('type');
        $properties = $this->db->select('property.name, link, sale, rent, price, area, bedrooms, latitude, longitude, main_img, type.marker as marker, location.name as locationname');
        $this->db->from('property');
        $this->db->join('type', 'type.id = property.type_id');	
        $this->db->join('location', 'location.id = property.location_id');	
        $properties = $this->db->get();
        $row = 0; $column = 0;
        foreach ($this->mostRecentProperty(8) as $recentprop) {
            if ($column <4) {
                  $recentproperties[$row][$column] = $recentprop;
                  $column++;
            } else {
                $row++;
                $column = 0;
                $recentproperties[$row][$column] = $recentprop;
                $column++;
            }
        }
        
        $this->twig->display('index.html.twig', array('locations' => $locations->result(), 'recent_properties' => $recentproperties,
                                                      'types' => $types->result(),  'properties' => $properties->result(), 
                                                      'property_url' => site_url('property/showproperty'),
                                                      'featured_properties' => $this->featuredProperty(6), 'allfeatured_url' => site_url('home/listAllFeatured')));
    }

    public function search()
    {
        $data = NULL;
        if ($this->input->get('filter_location'))
                $data['location_id'] = $this->input->get('filter_location');
        if ($this->input->get('filter_type'))	
                $data['type_id'] = $this->input->get('filter_type');
        if ($this->input->get('filter_rent'))	
                $data['rent'] = $this->input->get('filter_rent');	
        if ($this->input->get('filter_sale'))	
                $data['sale'] = $this->input->get('filter_sale');	
        if ($this->input->get('filter_price_from'))	
                $data['price >='] = $this->input->get('filter_price_from');	
        if ($this->input->get('filter_price_to'))	
                $data['price <='] = $this->input->get('filter_price_to');	
        if ($this->input->get('filter_area_from'))	
                $data['area >='] = $this->input->get('filter_area_from');
        if ($this->input->get('filter_area_to'))	
                $data['area <='] = $this->input->get('filter_area_to');
        $sort_dir = '';
        $sort_by = '';

        if ($this->input->get('sort_dir'))	
                $sort_dir = $this->input->get('sort_dir');			
        if ($this->input->get('sort_by'))	
                $sort_by = $this->input->get('sort_by');	

        $this->db->select('property.id, link, property.name, price, area, bedrooms, floor, short_description, main_img, modify_date, location.name AS location_name');
        if (!empty($data))
                $this->db->where($data);
        $this->db->from('property');
        $count = $this->db->count_all_results();
        $this->db->select('property.id, link, property.name, price, area, bedrooms, floor, short_description, main_img, modify_date, location.name AS location_name');
        if (!empty($data))
                $this->db->where($data);
        $this->db->from('property');
        $this->db->join('location', 'location.id = property.location_id');	
//sort
        if ($this->input->get('sort_dir') && $this->input->get('sort_by'))	{
                $sort_direction = $this->input->get('sort_dir');
                $sort_by = $this->input->get('sort_by');

                $this->db->order_by($sort_by, $sort_direction );
        } else {		
                $this->db->order_by('modify_date', 'desc');
        }

        $pageno = $this->input->get('per_page');		
        if ($pageno < 0)
                $pageno = 0;

        $this->db->limit(10,  $pageno);
        $properties = $this->db->get();

//Search form data +		
        $this->db->select('id, name');
        $this->db->from('location');
        $this->db->order_by('name');

        $locations = $this->db->get();
        $types = $this->db->get('type');
//Search form data -

        $data['price_from'] = $this->input->get('filter_price_from');	
        $data['price_to'] = $this->input->get('filter_price_to');	
        $data['area_from'] = $this->input->get('filter_area_from');
        $data['area_to'] = $this->input->get('filter_area_to');
        $this->load->library('pagination');
        $filters = $this->input->get();
        $page = '';
        if (isset($filters['per_page'])) {
                $page = $filters['per_page'];
                unset($filters['per_page']);
        }
        $link = '?';
        if (!empty($filters)) {
                foreach ($filters as $key => $filter) {
                        if ($link != '?') {
                                $link .= '&'.$key.'='.$filter;
                        }
                        else $link .= $key.'='.$filter;
                }
        }
        $config['base_url'] = $link;
        $config['total_rows'] = $count;
        $config['per_page'] = 10; 
        $config['page_query_string']  = true;
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['first_link'] = 'Pirmas';		
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Paskutinis';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $this->pagination->initialize($config); 
        $links = $this->pagination->create_links();
        $next_url = $this->pagination->next_url;
        $prev_url = $this->pagination->prev_url;
 //die($prev_url);
        $this->twig->display('propertylist.html.twig', array('properties' => $properties->result(), 
                                                             'parameters' => $data, 'locations' => $locations->result(), 'listname' => 'Pasiūlymai',
                                                             'types' => $types->result(), 'pagination' => $links, 'property_url' => site_url('property/showproperty'), 'sort_dir' => $sort_dir, 
                                                             'sort_by' => $sort_by, 'next_url' => $next_url, 'prev_url' => $prev_url));
    }

    function listAllFeatured()
    {
        $properties = $this->featuredProperty(0);
        
//Search form data +		
        $this->db->select('id, name');
        $this->db->from('location');
        $this->db->order_by('name');

        $locations = $this->db->get();
        $types = $this->db->get('type');
//Search form data -
        $this->twig->display('propertylist.html.twig', array('properties' => $properties, 'showorderform' => false, 
                                                             'parameters' => '', 'locations' => $locations->result(), 'listname' => 'Rekomenduojami pasiūlymai',
                                                             'types' => $types->result(), 'pagination' => '', 'property_url' => site_url('property/showproperty'), 'sort_dir' => '', 
                                                             'sort_by' => '', 'next_url' => '', 'prev_url' => ''));
    }
    
    public function mostRecentProperty($count)
    {
        $this->load->model('Property_model');
        return $this->Property_model->getMostRecentProperty($count);            
    }

    public function featuredProperty($count)
    {
        $this->load->model('Property_model');
        return $this->Property_model->getFeaturedProperties($count);
    }
}	

?>