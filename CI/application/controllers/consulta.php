<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends CI_Controller {

	  public function __construct() {
      parent::__construct();
      $this->load->model('consultaModel');
      $this->load->helper('form');
      $this->load->helper('array');
      $this->load->library('form_validation');    
      $this->load->library('session');


        if($this->session->userdata('tipo') == 'V'){
          print_r($this->session->all_userdata());
        }else{
            redirect('login');
        }
    }

    public function index(){    
      $this->load->view('consulta');
    }
 
	 
  	public function inserir()

	  {                                        
        $this->form_validation->set_rules('nomeAnimal','NOME','required');
        $this->form_validation->set_rules('idade','IDADE','required|is_numeric');
        $this->form_validation->set_rules('raca','RAÇA','required');
        $this->form_validation->set_rules('pelagem','PELAGEM','required');
        $this->form_validation->set_rules('especie','ESPECIE','required');
        $this->form_validation->set_rules('peso','PESO','required|is_numeric');

        $this->form_validation->set_rules('nomeProp','NOME PROPIETARIO','required');
        $this->form_validation->set_rules('cpf','CPF','required');
        $this->form_validation->set_rules('telefone','TELEFONE','required');
        $this->form_validation->set_rules('numero','NUMERO','is_numeric');

        $this->form_validation->set_rules('queixa','QUEIXA','required');
        $this->form_validation->set_rules('medicamento','MEDICAMENTO','required');
        $this->form_validation->set_rules('doenca','DOENÇAS','required');
        $this->form_validation->set_rules('temperatura','TEMPERATURA','required|is_numeric');
        $this->form_validation->set_rules('freqC','FREQUENCIA CARDIACA','required|is_numeric');
        $this->form_validation->set_rules('freqR','FREQUENCIA RESPIRATORIA','required|is_numeric'); 
        $this->form_validation->set_rules('hidratacao','TEMPERATURA','required|is_numeric');   
        $this->form_validation->set_rules('linfonodos','LINFONODOS','required');
        $this->form_validation->set_rules('tpc','TPC','required');  
        $this->form_validation->set_rules('mucosas','MUCOSAS','required');
        $this->form_validation->set_rules('pele','PELE','required');
        $this->form_validation->set_rules('pelos','PELOS','required');
        $this->form_validation->set_rules('estad_geral','ESTADO GERAL','required');
        $this->form_validation->set_rules('diagnostico','DIAGNOSTICO','required');
        $this->form_validation->set_rules('terapia_pres','TERAPIA PRESCRITA','required');
        $this->form_validation->set_rules('terapia_real  ','TERAPIA REAL','required');

        if($this->form_validation->run() == TRUE):
             
        $data_prop = elements(array('nomeProp','cpf','celular','telefone','logradouro','numero','cidade','bairro','estado'), $this->input->post());  
        $data_animal = elements(array('nomeAnimal','idade','especie','raca','pelagem','sexo','peso'), $this->input->post());
        $data_consulta = elements(array('queixa','vacinacoes','vermifugacao','ectoparasitos','alimentacao',
                                        'ambiente','contactantes','medicamento','doencas_anteriores',
                                        'temperatura','freq_card','freq_resp','estado_geral','hidratacao','mucosas',
                                        'tpc','linfonodos','pele','pelos','cabeca',
                                        'sist_resp','sist_circ','sist_dige','sist_geto','sist_neur','sist_loco',
                                        'bioquimico','urinalise','cavitario','hemograma','diagnostico','terapia_real','terapia_pres'),$this->input->post());

        $this->consultaModel->cadastrar($data_prop, $data_animal,$data_consulta);
        endif;

        $this->load->view('consulta');
  
    }    
}
