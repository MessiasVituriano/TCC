<?php

class ConsultaModel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cadastrar($data_prop, $data_animal, $data_consulta){
        $this->db->insert('proprietario', $data_prop);
        $id = $this->db->insert_id();
        $data_animal['id_prop'] = $id;
        $this->db->insert('animal', $data_animal);
        $id1 = $this->db->insert_id();
        $data_consulta['id_animal'] = $id1;
        $this->db->insert('consulta',$data_consulta);
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


}
?>