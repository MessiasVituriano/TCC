<?php
	class UsuarioModel extends CI_Model{

		public function __constuct(){
            parent::__constuct();
            $this->load->database();
		}
 		
 		public function insert_usuario($data_usuario, $data_contato, $data_endereco){
		    $this->db->insert('usuario', $data_usuario);
		    $id = $this->db->insert_id();
		    $data_contato['id'] = $id;
		    $this->db->insert('contato', $data_contato);
		    $data_endereco['id'] = $id;
		    $this->db->insert('endereco', $data_endereco);
		}
 	
 		public function get_usuarios(){
        	$query = $this->db->get('usuario');
        	return $query->result();
    	}

		public function update_usuario($id ,$data_usuario, $data_contato, $data_endereco){
			$this->db->where('id', $id);
			$this->db->update('usuario', $data_usuario);
			$this->db->where('id', $id);
			$this->db->update('contato', $data_contato);
			$this->db->where('id', $id);
			$this->db->update('endereco', $data_endereco);
		}

		public function get_usuarios_id($id){
			$this->db->select("usuario.*, contato.*, endereco.*");
			$this->db->from('usuario');
			$this->db->where('usuario.id', $id);
			$this->db->join('contato', 'contato.id = usuario.id');
			$this->db->join('endereco', 'endereco.id = usuario.id');
			$query = $this->db->get();
			return $query->result();
		}

		public function delete($id){
			$this->db->where('id', $id);
			$this->db->delete('usuario');
			
		}

	    public function search_usuario($pesquisa)
	    {

			$this->db->select("usuario.*, contato.*, endereco.*");
			$this->db->from('usuario');
	        $this->db->like('usuario.nome_usuario', $pesquisa);
			$this->db->join('contato', 'contato.id = usuario.id');
			$this->db->join('endereco', 'endereco.id = usuario.id');
	        $query = $this->db->get();
	        return $query->result();
	    }

		public function login($nome_usuario, $senha){
		$this->db->select('*');
		$this->db->from('usuario');
	    $this->db->where('nome_usuario', $nome_usuario);
	    $this->db->where('senha', MD5($senha));
	    $this->db->limit(1);

   		$query = $this->db-> get();
 
   		if($query->num_rows() == 1){
     		return $query->result();
   		}
   		else{
     		return false;
   		}
 	}	
		
	}	
?>