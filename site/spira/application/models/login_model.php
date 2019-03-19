<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Marlon C. Pilonetto
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function console_log( $data ){
      echo '<script>';
      echo 'console.log('. json_encode( $data ) .')';
      echo '</script>';
    }    
    
    public function validate(){
        // grab user input
        
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
      //  $this->db->where('login', $username);
    //    $this->db->where('senha', $password);
        
        $this->console_log($username);
        $this->console_log($password);        
        // Run the query
        
        $query = $this->db->get('filiais');
        
        $this->console_log($query);
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->id_user,
                    'fname' => $row->login,
                    'lname' => $row->login,
                    'username' => $row->username,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>