<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Properties extends CI_Controller {

    public function __construct() {
         parent::__construct();
         $this->twig->add_global('base_url', base_url());
         $this->twig->add_global('logout_url', site_url('administrator/home/logout'));
         $this->load->library('session');
         if ($this->session->userdata('logedin'))
         {
             $this->load->model('administrator/user_model');
             $user = $this->user_model->getUserData($this->session->userdata('username'));
             $this->twig->add_global('user_name', $user->name . ' ' . $user->surename);
             $this->twig->add_global('user_img', $user->profile_picture);
         }
         else 
              redirect(site_url('administrator/home'));
     }  
    
    public function index()
    {
        if ($this->session->userdata('logedin'))  
            $this->twig->display('administrator/dashboard.html.twig', array());
        else 
            $this->twig->display('administrator/signin.html.twig', array('form_url' => site_url('administrator/home/login')));
    }
    
    public function showlist()
    {
        $this->load->model('administrator/property_model');
        $data['properties'] = $this->property_model->getPropertyList();
        $data['property_url'] = site_url('administrator/properties/showproperty');
        $this->twig->display('administrator/propertylist.html.twig', $data);
    }
    
    public function showproperty()
    {
        $link = $this->uri->segment(4);
        $data = [];
        $this->twig->display('administrator/propertyedit.html.twig', $data);             
    }
    
    public function doaction()
    {
        $props = $_POST['properties'];
        var_dump($props);
        die('do action');
    }
}	

?>