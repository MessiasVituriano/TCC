<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validar extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('ExameModel');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

    	if($this->session->userdata('tipo') != 'S'){
			redirect('login');
		}
    }

    public function index(){ 
        $dados['cavitarios'] = $this->ExameModel->get_cavitarios();
        $dados['hemogramas'] = $this->ExameModel->get_hemogramas();
        $dados['urinalises'] = $this->ExameModel->get_urinalises();
        $dados['bioquimicos'] = $this->ExameModel->get_bioquimicos();
		$this->load->view('validar', $dados);
    }

    public function bioquimico()
    {

        if(isset($_POST["validar"])){
            if($_POST["validar"] == "sim")
                $this->ExameModel->validar_bioquimico($this->uri->segment(3),'V');
            if($_POST["validar"] == "nao")
                $this->ExameModel->validar_bioquimico($this->uri->segment(3),'N');
            redirect('validar');                
            }else{
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->ExameModel->get_exame_bioquimico_id($id);
                $this->load->view('validarBioquimico', $dados);
        }
    }
    public function cavitario()
    {

        if(isset($_POST["validar"])){
            if($_POST["validar"] == "sim")
                $this->ExameModel->validar_cavitario($this->uri->segment(3),'V');
            if($_POST["validar"] == "nao")
                $this->ExameModel->validar_cavitario($this->uri->segment(3),'N');
            redirect('validar');                
            }else{
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->ExameModel->get_exame_cavitario_id($id);
                $this->load->view('validarCavitario', $dados);
        }
    }
    public function hemograma()
    {

        if(isset($_POST["validar"])){
            if($_POST["validar"] == "sim")
                $this->ExameModel->validar_hemograma($this->uri->segment(3),'V');
            if($_POST["validar"] == "nao")
                $this->ExameModel->validar_hemograma($this->uri->segment(3),'N');
            redirect('validar');                
            }else{
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->ExameModel->get_exame_hemograma_id($id);
                $this->load->view('validarHemograma', $dados);
        }
    }
    public function urinalise()
    {

        if(isset($_POST["validar"])){
            if($_POST["validar"] == "sim")
                $this->ExameModel->validar_urinalise($this->uri->segment(3),'V');
            if($_POST["validar"] == "nao")
                $this->ExameModel->validar_urinalise($this->uri->segment(3),'N');
            redirect('validar');                
            }else{
                $id = $this->uri->segment(3);
                $dados['exames'] = $this->ExameModel->get_exame_urinalise_id($id);
                $this->load->view('validarUrinalise', $dados);
        }
    }

    }
?>