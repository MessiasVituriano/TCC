<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exame extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('ExameModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

    	if($this->session->userdata('tipo') != 'T'){
			redirect('login');
		}
    }

    public function index(){ 
		$dados['cavitarios'] = $this->ExameModel->get_consulta_cavitario();
        $dados['hemogramas'] = $this->ExameModel->get_consulta_hemograma();
        $dados['urinalises'] = $this->ExameModel->get_consulta_urinalise();
        $dados['bioquimicos'] = $this->ExameModel->get_consulta_bioquimico();
        $this->load->view('exame', $dados);
    }

	public function cavitario()
	{
		$this->form_validation->set_rules('volume', 'VOLUME', 'required|is_numeric');
		$this->form_validation->set_rules('cor', 'COR', 'required');
		$this->form_validation->set_rules('densidade', 'DENSIDADE', 'required|is_numeric');
		$this->form_validation->set_rules('aspecto', 'ASPECTO', 'required');
		$this->form_validation->set_rules('coagulacao', 'COAGULACAO', 'required');
		$this->form_validation->set_rules('pH', 'PH', 'required|is_numeric');
		$this->form_validation->set_rules('glicose', 'glicose', 'required');
		$this->form_validation->set_rules('proteinas', 'PROTEINAS', 'required');
		$this->form_validation->set_rules('cetonas', 'CETONAS', 'required');
		$this->form_validation->set_rules('bilirrubina', 'BILIRRUBINA', 'required');
		$this->form_validation->set_rules('sangue_oculto', 'SANGUE OCULTO', 'required');
		$this->form_validation->set_rules('hemacias', 'HEMACIAS', 'required|is_numeric');
		$this->form_validation->set_rules('urobilinogenio', 'UROBILINOGENIO', 'required|is_numeric');
		$this->form_validation->set_rules('nitritos', 'NITRITOS', 'required|is_numeric');
		$this->form_validation->set_rules('citologia', 'CITOLOGIA', 'required');
		$this->form_validation->set_rules('celulas_nucleadas', 'CELULAS NUCLEADAS', 'required');


        if($this->form_validation->run() == TRUE):
		$data_exame = array(
			'id_consulta'  => $this->input->post('id_consulta'),
			'volume' => $this->input->post('volume'),
			'cor' => $this->input->post('cor'),
			'densidade' => $this->input->post('densidade'),
			'aspecto' => $this->input->post('aspecto'),
			'coagulacao' => $this->input->post('coagulacao'),
			'pH' => $this->input->post('pH'),
			'glicose' => $this->input->post('glicose'),
			'urobilinogenio' => $this->input->post('urobilinogenio'),
			'proteinas' => $this->input->post('proteinas'),
			'nitritos' => $this->input->post('nitritos'),
			'sangue_oculto' => $this->input->post('sangue_oculto'),
			'cetonas' => $this->input->post('cetonas'),
			'bilirrubina' => $this->input->post('bilirrubina'),
			'sais_biliares' => $this->input->post('sais_biliares'),
			'hemacias' => $this->input->post('hemacias'),
			'celulas_nucleadas' => $this->input->post('celulas_nucleadas'),
			'citologia' => $this->input->post('citologia'),
       		'data_exame' => date("Y-m-d"),
        	'status' => 'R'
		);

		$this->ExameModel->insert_cavitario($data_exame);
		$this->ExameModel->update_consulta($this->input->post('id_consulta'),'cavitario');
		redirect('exame');
		endif;

        $id = $this->uri->segment(3);
        $dados['consultas'] = $this->ExameModel->get_consulta_id($id);
		$this->load->view('cavitario',$dados);
	}

	public function bioquimico()
	{
		$this->form_validation->set_rules('ureia_serica', 'UREIA SERICA', 'required|is_numeric');
		$this->form_validation->set_rules('creatina_serica', 'CREATINA SERICA', 'required|is_numeric');
		$this->form_validation->set_rules('alt_tpg', 'ALT/TPG', 'required|is_numeric');
		$this->form_validation->set_rules('ast_tgo', 'AST/TGO', 'required|is_numeric');
		$this->form_validation->set_rules('fostofase_alcalina', 'FOTOSFASE ALCALINA', 'required|is_numeric');
		$this->form_validation->set_rules('lipase', 'LIPASE', 'required|is_numeric');
		$this->form_validation->set_rules('amilase', 'AMILASE', 'required|is_numeric');
		$this->form_validation->set_rules('glicose', 'GLICOSE', 'required|is_numeric');
		$this->form_validation->set_rules('colesterol_total', 'COLESTEROL TOTAL', 'required|is_numeric');
		$this->form_validation->set_rules('triglicerideos', 'TRIGLICERIDEOS', 'required|is_numeric');
		$this->form_validation->set_rules('albumina', 'ALBUMINA', 'required|is_numeric');
		$this->form_validation->set_rules('bilirrubina_total', 'BILIRRUBINA TOTAL', 'required|is_numeric');
		$this->form_validation->set_rules('bilirrubina_direta', 'BILIRRUBINA DIRETA', 'required|is_numeric');
		$this->form_validation->set_rules('bilirrubina_indireta', 'BILIRRUBINA INDIRETA', 'required|is_numeric');
		$this->form_validation->set_rules('gama_gt', 'GAMA GT', 'required|is_numeric');
		$this->form_validation->set_rules('calcio', 'CALCIO', 'required|is_numeric');
		$this->form_validation->set_rules('fosforo', 'FOSFORO', 'required|is_numeric');
		$this->form_validation->set_rules('potassio', 'POTASSIO', 'required|is_numeric');
		$this->form_validation->set_rules('outros', 'OUTROS', 'required');
		$this->form_validation->set_rules('caracteristica', 'CARACTERISTICA', 'required');
		$this->form_validation->set_rules('teste', 'TESTE', 'required');
		
        if($this->form_validation->run() == TRUE):
        	$data_exame = array(
        		'id_consulta' => $this->input->post('id_consulta'),
        		'ureia_serica' => $this->input->post('ureia_serica'),
        		'creatina_serica' => $this->input->post('creatina_serica'),
        		'alt_tpg' => $this->input->post('alt_tpg'),
        		'ast_tgo' => $this->input->post('ast_tgo'),
        		'fostofase_alcalina' => $this->input->post('fostofase_alcalina'),
        		'lipase' => $this->input->post('lipase'),
        		'amilase' => $this->input->post('amilase'),
        		'glicose' => $this->input->post('glicose'),
        		'colesterol_total' => $this->input->post('colesterol_total'),
        		'triglicerideos' => $this->input->post('triglicerideos'),
        		'albumina' => $this->input->post('albumina'),
        		'bilirrubina_total' => $this->input->post('bilirrubina_total'),
        		'bilirrubina_direta' => $this->input->post('bilirrubina_direta'),
        		'bilirrubina_indireta' => $this->input->post('bilirrubina_indireta'),
        		'gama_gt' => $this->input->post('gama_gt'),
        		'calcio' => $this->input->post('calcio'),
        		'fosforo'  => $this->input->post('fosforo'),
        		'potassio' => $this->input->post('potassio'),
        		'outros' => $this->input->post('outros'),
        		'caracteristica' => $this->input->post('caracteristica'),
        		'teste' => $this->input->post('teste'),
        		'data_exame' => date("Y-m-d"),
        	    'status' => 'R'
				);

	        $this->ExameModel->insert_bioquimico($data_exame);
			$this->ExameModel->update_consulta($this->input->post('id_consulta'),'bioquimico');
			redirect('exame');
        
        endif;
        
        $id = $this->uri->segment(3);
        $dados['consultas'] = $this->ExameModel->get_consulta_id($id);
  		$this->load->view('bioquimico',$dados);
	}

	public function urinalise()
	{
		$this->form_validation->set_rules('metodo', 'METODO','required');
		$this->form_validation->set_rules('cor', 'COR','required');
		$this->form_validation->set_rules('aspecto', 'ASPECTO','required');
		$this->form_validation->set_rules('odor', 'ODOR','required');
		$this->form_validation->set_rules('volume', 'METODO','required|is_numeric');
		$this->form_validation->set_rules('densidade', 'METODO','required|is_numeric');
		$this->form_validation->set_rules('pH', 'METODO','required|is_numeric');
		$this->form_validation->set_rules('proteinas', 'PROTEINAS','required');
		$this->form_validation->set_rules('glicose', 'GLICOSE','required');
		$this->form_validation->set_rules('corpos_cetonicos', 'CORPOS CETONICOS','required');
		$this->form_validation->set_rules('sangue_oculto', 'SANGUE OCULTO','required');
		$this->form_validation->set_rules('bilirrubina', 'BILIRRUBINA','required');
		$this->form_validation->set_rules('urobilinogenio', 'UROBILINOGENIO','required|is_numeric');
		$this->form_validation->set_rules('hemacias', 'HEMACIAS','required|is_numeric');
		$this->form_validation->set_rules('leocitos', 'LEOCITOS','required|is_numeric');
		$this->form_validation->set_rules('bacterias', 'BACTERIAS','required');
		$this->form_validation->set_rules('ce_renais', 'RENAIS','required');
		$this->form_validation->set_rules('ce_pelve', 'PELVE','required');
		$this->form_validation->set_rules('ce_versicais', 'VERSICAIS','required');
		$this->form_validation->set_rules('ce_uretrais', 'URETRAIS','required');
		$this->form_validation->set_rules('cilindros_hialinos', 'HIALINOS','required');
		$this->form_validation->set_rules('cilindros_granulosos', 'GRANULOSOS','required');
		$this->form_validation->set_rules('cilindros_celulares', 'CELULARES','required');
		$this->form_validation->set_rules('cilindros_cereos', 'CEREOS','required');
		$this->form_validation->set_rules('cilindros_mistos', 'MISTOS','required');
		$this->form_validation->set_rules('cristais', 'CRISTAIS','required');
		$this->form_validation->set_rules('outros', 'OUTROS','required');
		$this->form_validation->set_rules('observacoes', 'OBSERVACOES','required');

        if($this->form_validation->run() == TRUE):
		
		$data_exame = array(
			'id_consulta' => $this->input->post('id_consulta'),
			'metodo' => $this->input->post('metodo'),
			'cor' => $this->input->post('cor'),
			'aspecto' => $this->input->post('aspecto'),
			'odor' => $this->input->post('odor'),
			'volume' => $this->input->post('volume'),
			'densidade' => $this->input->post('densidade'),
			'pH' => $this->input->post('pH'),
			'proteinas' => $this->input->post('proteinas'),
			'glicose' => $this->input->post('glicose'),
			'corpos_cetonicos' => $this->input->post('corpos_cetonicos'),
			'sangue_oculto' => $this->input->post('sangue_oculto'),
			'bilirrubina' => $this->input->post('bilirrubina'),
			'urobilinogenio' => $this->input->post('urobilinogenio'),
			'hemacias' => $this->input->post('hemacias'),
			'leocitos' => $this->input->post('leocitos'),
			'bacterias' => $this->input->post('bacterias'),
			'ce_renais' => $this->input->post('ce_renais'),
			'ce_pelve' => $this->input->post('ce_pelve'),
			'ce_versicais' => $this->input->post('ce_versicais'),
			'ce_uretrais' => $this->input->post('ce_uretrais'),
			'cilindros_hialinos' => $this->input->post('cilindros_hialinos'),
			'cilindros_granulosos' => $this->input->post('cilindros_granulosos'),
			'cilindros_celulares' => $this->input->post('cilindros_celulares'),
			'cilindros_cereos' => $this->input->post('cilindros_cereos'),
			'cilindros_mistos' => $this->input->post('cilindros_mistos'),
			'cristais' => $this->input->post('cristais'),
			'outros' => $this->input->post('outros'),
			'observacoes' => $this->input->post('observacoes'),
       		'data_exame' => date("Y-m-d"),
			'status' => 'R'
		);
		
	        $this->ExameModel->insert_urinalise($data_exame);
			$this->ExameModel->update_consulta($this->input->post('id_consulta'), 'urinalise');
			redirect('exame');
        	endif;
        	
		$id = $this->uri->segment(3);
		$dados['consultas'] = $this->ExameModel->get_consulta_id($id);
   		$this->load->view('urinalise', $dados);
	}

	public function hemograma()
	{

		$this->form_validation->set_rules('aspecto_fisico', 'ASPECTO FISICO', 'required');
		$this->form_validation->set_rules('protei_plasmatica', 'PROTEINA PLASMATICA', 'required|is_numeric');
		$this->form_validation->set_rules('fibrinogenio', 'FIBRINOGENIO', 'required|is_numeric');
		$this->form_validation->set_rules('hemacia', 'HEMACIA', 'required|is_numeric');
		$this->form_validation->set_rules('hematocrito', 'HEMATOCRITO', 'required|is_numeric');
		$this->form_validation->set_rules('hemogloblina', 'HEMOGLOBLINA', 'required|is_numeric');
		$this->form_validation->set_rules('vgm', 'VGM', 'required|is_numeric');
		$this->form_validation->set_rules('chgm', 'CHGM', 'required|is_numeric');
		$this->form_validation->set_rules('reticulocit_relativo', 'RETICULOCITOS RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('reticulocit_absoluto', 'RETICULOCITOS', 'required|is_numeric');
		$this->form_validation->set_rules('linfocitos', 'LINFOCITOS', 'required|is_numeric');
		$this->form_validation->set_rules('linfocitos_relativo', 'LINFOCITOS RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('monocitos', 'MONOCITOS', 'required|is_numeric');
		$this->form_validation->set_rules('eosinofilos', 'EOSINOFILOS', 'required|is_numeric');
		$this->form_validation->set_rules('segmentados', 'SEGMENTADOS', 'required|is_numeric');
		$this->form_validation->set_rules('bastoes', 'BASTOES', 'required|is_numeric');
		$this->form_validation->set_rules('basolitos', 'BASOLITOS', 'required|is_numeric');
		$this->form_validation->set_rules('mielocitos', 'MIELOCITOS', 'required|is_numeric');
		$this->form_validation->set_rules('metamielocitos', 'METAMIELOCITOS', 'required|is_numeric');
		$this->form_validation->set_rules('plaquetas', 'PLAQUETAS', 'required|is_numeric');
		$this->form_validation->set_rules('observacoes', 'OBSERVACOES', 'required|is_numeric');
		$this->form_validation->set_rules('monocitos_relativo', 'MONOCITOS RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('eosinofilos_relativo', 'EOSINOFILOS RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('segmentados_relativo', 'SEGMENTADOS RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('bastoes_relativo', 'BASTOES RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('basolitos_relativo', 'BASOLITOS RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('mielocitos_relativo', 'MIELOCITOS RELATIVO', 'required|is_numeric');
		$this->form_validation->set_rules('metamielocitos_relativo', 'METAMIELOCITOS RELATIVO', 'required|is_numeric');

        if($this->form_validation->run() == TRUE):
        	$data_exame = array(
        		'id_consulta' => $this->input->post('id_consulta'),
        		'aspecto_fisico'  => $this->input->post('aspecto_fisico'),
        		'protei_plasmatica'  => $this->input->post('protei_plasmatica'),
        		'fibrinogenio' => $this->input->post('fibrinogenio'),
        		'hemacia' => $this->input->post('hemacia'),
        		'hematocrito' => $this->input->post('hematocrito'),
        		'hemogloblina' => $this->input->post('hemogloblina'),
        		'vgm' => $this->input->post('vgm'),
        		'chgm' => $this->input->post('chgm'),
        		'reticulocit_relativo' => $this->input->post('reticulocit_relativo'),
        		'reticulocit_absoluto' => $this->input->post('reticulocit_absoluto'),
        		'linfocitos' => $this->input->post('linfocitos'),
        		'linfocitos_relativo' => $this->input->post('linfocitos_relativo'),
        		'monocitos' => $this->input->post('monocitos'),
        		'monocitos_relativo' => $this->input->post('monocitos_relativo'),
        		'eosinofilos' => $this->input->post('eosinofilos'),
        		'eosinofilos_relativo' => $this->input->post('eosinofilos_relativo'),
        		'segmentados' => $this->input->post('segmentados'),
        		'segmentados_relativo' => $this->input->post('segmentados_relativo'),
        		'bastoes' => $this->input->post('bastoes'),
        		'bastoes_relativo' => $this->input->post('bastoes_relativo'),
        		'basolitos' => $this->input->post('basolitos'),
        		'basolitos_relativo' => $this->input->post('basolitos_relativo'),
        		'mielocitos' => $this->input->post('mielocitos'),
        		'mielocitos_relativo' => $this->input->post('mielocitos_relativo'),
        		'metamielocitos' => $this->input->post('metamielocitos_relativo'),
        		'metamielocitos_relativo' => $this->input->post('metamielocitos_relativo'),
        		'plaquetas' => $this->input->post('plaquetas'),
        		'observacoes' => $this->input->post('observacoes'),
         		'data_exame' => date("Y-m-d"),
	       		'status' => 'R'
        		);

	        $this->ExameModel->insert_hemograma($data_exame);
			$this->ExameModel->update_consulta($this->input->post('id_consulta'), 'hemograma');
			redirect('exame');
        	endif;
        	
		$id = $this->uri->segment(3);
		$dados['consultas'] = $this->ExameModel->get_consulta_id($id);
   		$this->load->view('hemograma', $dados);
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
	    
	    if($this->form_validation->run() == TRUE){
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
	    		'data_exame'  => date('Y-m-d H:i:s'),
	    		'ectoparasitos' => $this->input->post('ectoparasitos'),
	    		'imagem' => $imageData
	    	);
	    	$this->ExameModel->insert_dermatologico($data_exame);
	    	redirect('exame');
	    }
	    $id = 1;
		$dados['consultas'] = $this->ExameModel->get_consulta_id($id);
   		$this->load->view('dermatologico', $dados);
	} 

	public function do_upload()
	{
		$config['allowed_types'] = 'png|jpeg|gif';
		$this->load->library('upload', $config);
	}

	public function visualizarDermatologico()
	{
		$dados['exames'] = $this->ExameModel->get_dermatologico(13);
   		$this->load->view('visualizarDermatologico', $dados);
	}

	public function visualizarUrinalise()
	{
		$id = $this->uri->segment(3);
		$dados['exames'] = $this->ExameModel->get_exame_urinalise_id($id);
   		$this->load->view('visualizarUrinalise', $dados);
	}
	
	public function visualizarCavitario()
	{
		$id = $this->uri->segment(3);
		$dados['exames'] = $this->ExameModel->get_exame_cavitario_id($id);
   		$this->load->view('visualizarCavitario', $dados);
	}
	
	public function visualizarBioquimico()
	{
		$id = $this->uri->segment(3);
		$dados['exames'] = $this->ExameModel->get_exame_bioquimico_id($id);
   		$this->load->view('visualizarBioquimico', $dados);
	}

	public function visualizarHemograma()
	{    
		$id = $this->uri->segment(3);
		$dados['exames'] = $this->ExameModel->get_exame_hemograma_id($id);
   		$this->load->view('visualizarHemograma', $dados);
	}
}
