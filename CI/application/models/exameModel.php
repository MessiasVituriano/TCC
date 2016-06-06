<?php

class ExameModel extends CI_Model{
         
    public function __construct(){
        parent::__construct();
        $this->load->database();
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
    
    public function update_consulta($id_consulta,$exame)
    {
        $this->db->where('id_consulta', $id_consulta);
        $this->db->set('consulta.'.$exame, 'R');
        $this->db->update('consulta');
    }

    public function get_exame_hemograma_id($id)
    {
        $this->db->select("*");
        $this->db->from('examehemograma');
        $this->db->where('id_exame', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_exame_cavitario_id($id)
    {
        $this->db->select("*");
        $this->db->from('examecavitario');
        $this->db->where('id_exame', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_exame_bioquimico_id($id)
    {
        $this->db->select("*");
        $this->db->from('examebioquimico');
        $this->db->where('id_exame', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_exame_urinalise_id($id)
    {
        $this->db->select("*");
        $this->db->from('exameurinalise');
        $this->db->where('id_exame', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_dermatologico($id){
        $this->db->select("examedermatologico.*, consulta.*, animal.*");
        $this->db->from('examedermatologico');
        $this->db->where('examedermatologico.id_exame', $id);
        $this->db->join('consulta', 'consulta.id_consulta = examedermatologico.id_consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');    
        $query = $this->db->get();
        return $query->result();
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


    public function get_consulta_bioquimico()
    {
        $this->db->select("consulta.*, proprietario.*, animal.*");
        $this->db->from('consulta');
        $this->db->where('consulta.bioquimico', 'S');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $this->db->join('proprietario', 'proprietario.id = animal.id_prop');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_consulta_cavitario()
    {
        $this->db->select("consulta.*, proprietario.*, animal.*");
        $this->db->from('consulta');
        $this->db->where('consulta.cavitario', 'S');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $this->db->join('proprietario', 'proprietario.id = animal.id_prop');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_consulta_hemograma()
    {
        $this->db->select("consulta.*, proprietario.*, animal.*");
        $this->db->from('consulta');
        $this->db->where('consulta.hemograma', 'S');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $this->db->join('proprietario', 'proprietario.id = animal.id_prop');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_consulta_urinalise()
    {
        $this->db->select("consulta.*, proprietario.*, animal.*");
        $this->db->from('consulta');
        $this->db->where('consulta.urinalise', 'S');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $this->db->join('proprietario', 'proprietario.id = animal.id_prop');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_urinalises()
    {
        $this->db->select("exameurinalise.id_exame, consulta.*, animal.*");
        $this->db->from('exameurinalise');
        $this->db->where('exameurinalise.status', 'R');
        $this->db->join('consulta', 'consulta.id_consulta = exameurinalise.id_consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_bioquimicos()
    {
        $this->db->select("examebioquimico.id_exame, consulta.*, animal.*");
        $this->db->from('examebioquimico');
        $this->db->where('examebioquimico.status', 'R');
        $this->db->join('consulta', 'consulta.id_consulta = examebioquimico.id_consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_cavitarios()
    {
        $this->db->select("examecavitario.id_exame, consulta.*, animal.*");
        $this->db->from('examecavitario');
        $this->db->where('examecavitario.status', 'R');
        $this->db->join('consulta', 'consulta.id_consulta = examecavitario.id_consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_hemogramas()
    {
        $this->db->select("examehemograma.id_exame, consulta.*, animal.*");
        $this->db->from('examehemograma');
        $this->db->where('examehemograma.status', 'R');
        $this->db->join('consulta', 'consulta.id_consulta = examehemograma.id_consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function validar_bioquimico($id_exame, $status)
    {
        $this->db->where('id_exame', $id_exame);
        $this->db->set('status', $status);
        $this->db->update('examebioquimico');
    }
    
    public function validar_cavitario($id_exame, $status)
    {
        $this->db->where('id_exame', $id_exame);
        $this->db->set('status', $status);
        $this->db->update('examecavitario');
    }
    
    public function validar_hemograma($id_exame, $status)
    {
        $this->db->where('id_exame', $id_exame);
        $this->db->set('status', $status);
        $this->db->update('examehemograma');
    }
    
    public function validar_urinalise($id_exame, $status)
    {
        $this->db->where('id_exame', $id_exame);
        $this->db->set('status', $status);
        $this->db->update('exameurinalise');
    }
}


?>