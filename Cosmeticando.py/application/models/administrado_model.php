<?php
    
     class administrado_model extends CI_Model {
           
          function logarAdministrador($username, $senha){
              $this->db->where('login_Administrador', $username);
              $this->db->where('senha_Administrador', md5($senha));
              
              return $this->db->get('administrador')->row();
          }
     
         
     }
?>