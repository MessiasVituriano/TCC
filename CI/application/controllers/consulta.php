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

        if($this->session->userdata('tipo') != 'V'){
            redirect('login');
        }
    }

    public function index(){  
        $dados['consultas'] = $this->consultaModel->get_consulta();
        $this->load->view('consulta', $dados);
    }
 
    public function pesquisa()
    {
        $this->form_validation->set_rules('pesquisa','PESQUISA','required');
        $pesquisa = $this->input->post('pesquisa');
        $dados['consultas'] = $this->consultaModel->search_consulta($pesquisa);
        $this->load->view('consulta', $dados);
    }

    public function visualizar()
    {
        $id = $this->uri->segment(3);
        $dados['consultas'] = $this->consultaModel->get_consulta_id($id);
        $this->load->view('visualizarConsulta', $dados);
    }

  	public function cadastro()
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
        redirect('consulta');
        endif;

        $this->load->view('cadastroConsulta');  
    }

    public function dermatologico(){

        $this->form_validation->set_rules('data_inicio', 'DATA INICIO', 'required');
        $this->form_validation->set_rules('duracao', 'DURACAO', 'required|is_numeric');
        $this->form_validation->set_rules('sinais', 'SINAIS', 'required');
        $this->form_validation->set_rules('progressao', 'PROGRESSAO', 'required');
        $this->form_validation->set_rules('variacao_sazonal', 'VARIACAO SAZONAL', 'required');
        $this->form_validation->set_rules('tratamento', 'TRATAMENTO', 'required');
        $this->form_validation->set_rules('ambiente', 'AMBIENTE', 'required');
        $this->form_validation->set_rules('contactantes', 'CONTACTANTES', 'required');
        $this->form_validation->set_rules('diagnostico', 'DIAGNOSTICO', 'required');

        $this->form_validation->set_rules('userfile', 'IMAGEM', 'callback_do_upload');
        
        if($this->form_validation->run() == TRUE):
            $imageData = file_get_contents($_FILES["userfile"]["tmp_name"]);
            $data_exame = array(
                'id_consulta' => $this->input->post('id_consulta'),
                'data_inicio' => $this->input->post('data_inicio'), 
                'duracao' => $this->input->post('duracao'),
                'sinais'  => $this->input->post('sinais'),
                'progressao'  => $this->input->post('progressao'),
                'variacao_sazonal'  => $this->input->post('variacao_sazonal'),
                'tratamento'  => $this->input->post('tratamento'),
                'ambiente'  => $this->input->post('ambiente'),
                'contactantes'  => $this->input->post('contactantes'),
                'diagnostico'  => $this->input->post('diagnostico'),
                'observacoes'  => $this->input->post('observacoes'),
                'data_exame'  => date('Y-m-d H:i:s'),
                'ectoparasitos' => $this->input->post('ectoparasitos'),
                'imagem' => $imageData
            );
            $this->consultaModel->insert_dermatologico($data_exame);
            $this->consultaModel->update_consulta($this->input->post('id_consulta'), 'dermatologico');
            redirect('consulta');
        endif;

        $id = $this->uri->segment(3);
        $dados['consultas'] = $this->consultaModel->get_consulta_id($id);
        $this->load->view('dermatologico', $dados);
    } 

    public function do_upload()
    {
        $config['allowed_types'] = 'png|jpeg|gif';
        $this->load->library('upload', $config);
    }

    public function visualizarDermatologico()
    {
        $id = $this->uri->segment(3);
        $dados['exames'] = $this->consultaModel->get_exame_dermatologico_id($id);
        $this->load->view('visualizarDermatologico', $dados);
    
    if(isset($_POST["salvarPDF"])){
            if($_POST["salvarPDF"] == "sim"){
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->consultaModel->get_exame_dermatologico_id($id);
                $this->PDF($this->load->view('visualizarDermatologico', $dados, true), "dermatologico_ID_".$id);
            }
        }

    }

    public function visualizarUrinalise()
    {
        $id = $this->uri->segment(3);
        $dados['exames'] = $this->consultaModel->get_exame_urinalise_id($id);
        $this->load->view('visualizarUrinalise', $dados);
        
        if(isset($_POST["salvarPDF"])){
            if($_POST["salvarPDF"] == "sim"){
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->consultaModel->get_exame_urinalise_id($id);
                $this->PDF($this->load->view('visualizarUrinalise', $dados, true), "urinalise_ID_".$id);
            }
        }   
    }
    
    public function visualizarCavitario()
    {
        $id = $this->uri->segment(3);
        $dados['exames'] = $this->consultaModel->get_exame_cavitario_id($id);
        $this->load->view('visualizarCavitario', $dados);
    
        if(isset($_POST["salvarPDF"])){
            if($_POST["salvarPDF"] == "sim"){
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->consultaModel->get_exame_cavitario_id($id);
                $this->PDF($this->load->view('visualizarCavitario', $dados, true), "cavitario_ID_".$id);
            }
        }
    }
    
    public function visualizarBioquimico()
    {

        $id = $this->uri->segment(3);
        $dados['exames'] = $this->consultaModel->get_exame_bioquimico_id($id);
        $this->load->view('visualizarBioquimico', $dados);
        
        if(isset($_POST["salvarPDF"])){
            if($_POST["salvarPDF"] == "sim"){
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->consultaModel->get_exame_bioquimico_id($id);
                $this->PDF($this->load->view('visualizarBioquimico', $dados, true), "bioquimico_ID_".$id);
            }
        }
    }

    public function visualizarHemograma()
    {    

        $id = $this->uri->segment(3);
        $dados['exames'] = $this->consultaModel->get_exame_hemograma_id($id);
        $this->load->view('visualizarHemograma', $dados);
        
        if(isset($_POST["salvarPDF"])){
            if($_POST["salvarPDF"] == "sim"){
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->consultaModel->get_exame_hemograma_id($id);
                $this->PDF($this->load->view('visualizarHemograma', $dados, true), "hemograma_ID_".$id);
            }
        }
    }



    public function PDF($html, $filename)
    { 
        //this the the PDF filename that user will get to download
        $pdfFilePath = $filename.".pdf";
 
        //load mPDF library
        $this->load->library('m_pdf');

        //$stylesheetCSS = '<style>'.file_get_contents('css/materialize.min.css').'</style>';;
        $stylesheetCSS = '<style>'.file_get_contents('css/pdf.css').'</style>';;
                
        $this->m_pdf->pdf->WriteHTML($stylesheetCSS);
        //generate the PDF from the given html

        $html1 = strip_tags($html, '<script><div><input><textarea><imap_gc(imap_stream, caches)><label><h1><h2><h3><h4><h5><h6>');

        $html1.= 'PDF gerado em: '.date("d/m/Y");

        $this->m_pdf->pdf->WriteHTML($html1);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");        
    }    
}
