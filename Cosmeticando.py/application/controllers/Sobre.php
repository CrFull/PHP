<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

           public function index(){
            $this->load->view('sobrenos');
           }

           public function contato(){
           	$this->load->view('contato/contato');
           }
    
         
         
     
    
}
?>