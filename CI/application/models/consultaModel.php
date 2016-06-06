<?php

class ConsultaModel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cadastrar($data_prop, $data_animal, $data_consulta)
    {
        $this->db->insert('proprietario', $data_prop);
        $id = $this->db->insert_id();
        $data_animal['id_prop'] = $id;
        $this->db->insert('animal', $data_animal);
        $id1 = $this->db->insert_id();
        $data_consulta['id_animal'] = $id1;
        $this->db->insert('consulta',$data_consulta);
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

    public function get_consulta_id($id)
    {
        $this->db->select("consulta.*, proprietario.*, animal.*");
        $this->db->from('consulta');
        $this->db->where('consulta.id_consulta', $id);
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $this->db->join('proprietario', 'proprietario.id = animal.id_prop');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_consulta()
    {
        $this->db->select("consulta.*, proprietario.*, animal.*");
        $this->db->from('consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $this->db->join('proprietario', 'proprietario.id = animal.id_prop');
        $query = $this->db->get();
        return $query->result();
    }

    public function search_consulta($pesquisa)
    {
        $this->db->select("consulta.*, proprietario.*, animal.*");
        $this->db->from('consulta');
        $this->db->like('proprietario.nomeProp', $pesquisa);
        $this->db->or_like('animal.nomeAnimal', $pesquisa);
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $this->db->join('proprietario', 'proprietario.id = animal.id_prop');
        $query = $this->db->get();
        return $query->result();
    }

    /*
    public function get_exame_dermatologico_id($id){
        $this->db->select("examedermatologico.*, consulta.*, animal.*");
        $this->db->from('examedermatologico');
        $this->db->where('examedermatologico.id_exame', $id);
        $this->db->join('consulta', 'consulta.id_consulta = examedermatologico.id_consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');    
        $query = $this->db->get();
        return $query->result();
    }   
*/
    public function get_exame_dermatologico_id($id){
        $this->db->select("examedermatologico.*, consulta.*, animal.*");
        $this->db->from('examedermatologico');
        $this->db->where('examedermatologico.id_consulta', $id);
        $this->db->join('consulta', 'consulta.id_consulta = examedermatologico.id_consulta');
        $this->db->join('animal', 'animal.id_animal = consulta.id_animal');
        $query = $this->db->get();
        return $query->result();
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

}
?>