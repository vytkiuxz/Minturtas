<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
         //get your data
     }  
    
    public function index()
    {
        /*$this->load->model('system_model');
        $menu = $this->system_model->getMenu();*/
        //die('died in admin');
        if ($this->session->userdata('logedin'))  
            $this->twig->display('administrator/dashboard.html.twig', array());
        else 
            $this->twig->display('administrator/signin.html.twig', array('form_url' => site_url('administrator/home/login')));
    }
    
    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('administrator/user_model');
        if ($this->user_model->loginUser($username, $password))
        {            
            $this->session->set_userdata('logedin', true);
            $this->session->set_userdata('username', $username);
            redirect(site_url('administrator/home/dashboard'));
        }
        else
        {
             $this->twig->display('administrator/signin.html.twig', array('form_url' => site_url('administrator/home/login'),
                                                                          'error'=>'Neteisingi prisijungimo duomenys.'));
        }
    }
    
    public function logout()
    {
       $this->session->sess_destroy();   
       redirect(site_url('administrator/home'));
    }
    
    public function dashboard()
    {
      if ($this->session->userdata('logedin'))  
        $this->twig->display('administrator/dashboard.html.twig', array()); 
      else redirect(site_url('administrator/home'));
    }
}	

?>