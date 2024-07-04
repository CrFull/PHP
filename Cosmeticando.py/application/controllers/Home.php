<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model("produto_model");
		$lista = $this->produto_model->buscaTodos();
		$data = array(
				"produtos" => $lista
			);
		
		$this->load->view('home/home.php');
	}
  
    
}
?>