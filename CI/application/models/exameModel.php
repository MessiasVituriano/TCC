<?php

class ExameModel extends CI_Model{
         
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
     
    
    public function get_consulta(){
//    	$query = $this->db->get('consulta');
//    	return $query->result();
        $query = $this->db->query('select * from consulta where hemograma = "S" || urinalise  = "S" 
            || bioquimico = "S" || cavitario = "S" && status = "P"');
        return $query->result();
    }

    public function insert_cavitario($data_exame){
        $this->db->insert('examecavitario',$data_exame);
    }

    public function insert_hemograma($data_exame){
        $this->db->insert('examehemograma',$data_exame);
    }
    
    public function insert_bioquimico($data_exame){
        $this->db->insert('examebioquimico',$data_exame);
    }

    public function insert_urinalise($data_exame){
        $this->db->insert('exameurinalise',$data_exame);
    }

    public function insert_dermatologico($data_exame)
    {
        $this->db->insert('examedermatologico',$data_exame);
    }
    
    public function update_consulta($id_consulta,$status)
    {
        $this->db->where('id_consulta', $id_consulta);
        $this->db->set('status', 'R');
        $this->db->update('consulta', $status);
    }
   
    
    public function get_consulta_id($id){
			$this->db->select("consulta.*, proprietario.*, animal.*");
			$this->db->from('consulta');
			$this->db->where('consulta.id_consulta', $id);
			$this->db->join('animal', 'animal.id_animal = consulta.id_animal');
			$this->db->join('proprietario', 'proprietario.id = animal.id_prop');
			$query = $this->db->get();
			return $query->result();
	}
}


?>