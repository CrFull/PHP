<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginAdministrador extends CI_Controller {

           
         public function logar(){
              $this->load->model('administrado_model');
              
              $username = $this->input->post("email");
              $senha = $this->input->post("senha");
              
              $user = $this->administrado_model->logarAdministrador($username, $senha);
              
              if($user){
                  $this->session->set_userdata('admin_logado', $user);
                  $this->load->view('areaadministracao/area');
              }else{
                  $this->load->view('home/home');
              }
          }


         
         
     
    
}
?>