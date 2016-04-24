<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->model('ConsultaModel');
        $this->load->library('form_validation');
	}

	public function index()
	{
		$dados['consultas'] = $this->ConsultaModel->get_consulta_id(1);
		$this->load->view('upload_form', $dados);
	}



	public function register(){

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

	    }
	} 

	public function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$file_name = $this->input->post('id_consulta');
		$config['file_name']  = $file_name;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
		}else{
			$dados['consultas'] = $this->ConsultaModel->get_consulta_id(1);
			$this->load->view('consulta', $dados);
		}
	}
}
?>