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
                  
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        
        
        
//        $this->console_log($username);
//        $this->console_log($password);        
        
        // Prepara a consulta
        $this->db->select('*');
        $this->db->from('usuarios');    
        $this->db->where('login', $username);
        $this->db->where('senha', $password);
        
        // Executa a consulta
        $query = $this->db->get();                     
        $result = $query->result();
        

        

        if(count($result) == 1)
        {
             $this->console_log("Sucesso");
        
            $row = $query->row();
            $data = array(
                    'userid' => $row->id_usuario,
                    'username' => $row->nome,
                    'clientid' => $row->id_cliente,                    
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}
?>