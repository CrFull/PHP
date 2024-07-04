<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControleProduto extends CI_Controller {
	
	public function todosProdutos()
	{
		$this->load->model("produto_model");
		$lista = $this->produto_model->buscaTodos();
		$dados = array("produtos" => $lista);
		$this->load->view('buscar/buscar', $dados);
	}
	
	public function cadastrar(){
	
			$produto = array(
				"nome" => $this->input->post("nome"),
				"preco" => $this->input->post("preco"),
				"tipo" => $this->input->post("tipo"),
				"descricao" => $this->input->post("descricao"),
				"foto" => ""
			);
			$this->load->model("produto_model");
			$this->produto_model->cadastrar($produto);
			$this->load->view('cadastro/cadastro');
		}
		
	
}
