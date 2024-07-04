<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class areaadmin extends CI_Controller {
	
	public function index()
	{
        $this->load->view('areaadministracao/area');

	}
}
