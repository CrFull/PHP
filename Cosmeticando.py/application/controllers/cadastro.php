<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastro extends CI_Controller {
	
	public function index()
	{
		$this->load->view('cadastro/cadastro');

	}
}
