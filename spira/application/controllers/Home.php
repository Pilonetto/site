<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Marlon C. Pilonetto
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }
    
    public function index(){
        // If the user is validated, then this function will run
        $this->load->view('head_view');
        $this->load->view('content_view');
        $this->load->view('footer_view');        
        // Add a link to logout
       // echo '<br /><a href=''.base_url().'home/do_logout'>Logout Fool!</a>';
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 }
 ?>