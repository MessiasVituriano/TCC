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
}
?>