<?php
	class Produto_model extends CI_model{
		
		public function cadastrar($produto){
			$this->db->insert("produto", $produto);
		}
		
		public function buscaTodos(){
			return $this->db->get("produto")->result_array();
		}
		
		public function retornaIdProduto($id){
		return $this->db->get_where("produto", array(
			"id" => $id))->row_array();
		}
		
		public function pesquisarPorNome($nome){
			if(isset($nome)){
				$this->db->select('*');
				$this->db->like('nome', $nome);
				return $this->db->get('produto')->result_array();
			}
		}
		
		public function deletar($id){
			$this->db->where('id', $id);
			$this->db->delete('produto');
			return true;
		}
		
		public function salvar(){
			$id = $this->input->post('id');
			
			$fotProduto = $this->input->post('foto');
			
			if($_FILES['arquivo']['name'] !=""){
				$produto = array(
					'nome' => $this->input->post('nome'),
					'preco' => $this->input->post('preco'),
					'tipo' => $this->input->post('tipo'),
					'descricao' => $this->input->post('descricao'),
					'foto' => ""
				);
			}else{
				
				$produto = array(
					'nome' => $this->input->post('nome'),
					'preco' => $this->input->post('preco'),
					'tipo' => $this->input->post('tipo'),
					'descricao' => $this->input->post('descricao'),
					'foto' => ""
				);
			}
				$this->db->where('id', $id);
				return $this->db->update('produto', $produto);
			
		}
		
	}
	
	
	
?>