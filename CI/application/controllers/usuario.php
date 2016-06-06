<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct() {
    parent::__construct();
    $this->load->model('UsuarioModel');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
  }

  public function index(){ 
    $dados['usuarios'] = $this->UsuarioModel->get_usuarios();
    $this->load->view('usuario', $dados);
  }

  public function update_usuario()
  {
    $this->form_validation->set_rules('nome_usuario', 'NOME USUÁRIO', 'required|min_length[4]');
    $this->form_validation->set_rules('tipo', 'TIPO', 'required');
    $this->form_validation->set_rules('senha', 'SENHA', 'required');

    $this->form_validation->set_rules('telefone', 'TELEFONE');
    $this->form_validation->set_rules('celular', 'CELULAR');
    $this->form_validation->set_rules('email', 'E-MAIL', 'valid_emails');

    $this->form_validation->set_rules('cidade', 'CIDADE');
    $this->form_validation->set_rules('bairro', 'BAIRRO');
    $this->form_validation->set_rules('cep', 'CEP');
    $this->form_validation->set_rules('logradouro', 'LOGRADOURO');
    $this->form_validation->set_rules('estado', 'ESTADO');
    $this->form_validation->set_rules('numero', 'NUMERO');
    $this->form_validation->set_rules('complemento', 'COMPLEMENTO');

    if($this->form_validation->run() == TRUE):
      $id = $this->input->post('id');

    $data_usuario = array(  
      'nome_completo' => $this->input->post('nome_completo'),
      'nome_usuario' => $this->input->post('nome_usuario'),
      'tipo' => $this->input->post('tipo'),
      'senha'        => md5($this->input->post('senha')),
      'cpf'        => $this->input->post('cpf')
      );

    $data_contato = array(
      'telefone'    => $this->input->post('telefone'),
      'email'       => $this->input->post('email'),
      'celular'    => $this->input->post('celular')
      );    

    $data_endereco = array(
      'cidade'    => $this->input->post('cidade'),
      'bairro'       => $this->input->post('bairro'),
      'cep'    => $this->input->post('cep'),
      'logradouro'    => $this->input->post('logradouro'),
      'estado'    => $this->input->post('estado'),
      'numero'    => $this->input->post('numero'),
      'complemento'    => $this->input->post('complemento')
      );    

    $this->UsuarioModel->update_usuario( $id, $data_usuario, $data_contato, $data_endereco);
    redirect('usuario');
    endif;

    $id = $this->uri->segment(3);
    $dados['usuarios'] = $this->UsuarioModel->get_usuarios_id($id);
    $this->load->view('atualizar',$dados);

  }



  public function cadastro(){

    $this->form_validation->set_rules('nome_usuario', 'NOME USUÁRIO', 'required|is_unique[usuario.nome_usuario]|min_length[4]');
    $this->form_validation->set_rules('nome_completo', 'NOME COMPLETO', 'required');
    $this->form_validation->set_rules('tipo', 'TIPO', 'required');
    $this->form_validation->set_rules('senha', 'SENHA', 'required');
    $this->form_validation->set_rules('cpf', 'CPF', 'required|is_unique[usuario.cpf]');

    $this->form_validation->set_rules('telefone', 'TELEFONE');
    $this->form_validation->set_rules('celular', 'CELULAR');
    $this->form_validation->set_rules('email', 'E-MAIL', 'trim|valid_emails');

    $this->form_validation->set_rules('cidade', 'CIDADE');
    $this->form_validation->set_rules('bairro', 'BAIRRO');
    $this->form_validation->set_rules('cep', 'CEP');
    $this->form_validation->set_rules('logradouro', 'LOGRADOURO');
    $this->form_validation->set_rules('estado', 'ESTADO', '');
    $this->form_validation->set_rules('numero', 'NUMERO', 'is_numeric');
    $this->form_validation->set_rules('complemento', 'COMPLEMENTO');



    if($this->form_validation->run() == TRUE):
      $data_usuario = array(  
        'nome_completo' => $this->input->post('nome_completo'),
        'nome_usuario' => $this->input->post('nome_usuario'),
        'tipo' => $this->input->post('tipo'),
        'senha'        => md5($this->input->post('senha')),
        'cpf'        => $this->input->post('cpf')
        );

    $data_contato = array(
      'telefone'    => $this->input->post('telefone'),
      'email'       => $this->input->post('email'),
      'celular'    => $this->input->post('celular')
      );    

    $data_endereco = array(
      'cidade'    => $this->input->post('cidade'),
      'bairro'       => $this->input->post('bairro'),
      'cep'    => $this->input->post('cep'),
      'logradouro'    => $this->input->post('logradouro'),
      'estado'    => $this->input->post('estado'),
      'numero'    => $this->input->post('numero'),
      'complemento'    => $this->input->post('complemento')
      );    

    $this->UsuarioModel->insert_usuario($data_usuario, $data_contato, $data_endereco);

    redirect('usuario');

    endif;
    $this->load->view('cadastroUsuario');
  }

  public function visualizarUsuario(){       
    $id = $this->uri->segment(3);
    $dados['usuarios'] = $this->UsuarioModel->get_usuarios_id($id);
    $this->load->view('visualizarUsuario', $dados);
  }


  public function delete($id){
    $id = $this->uri->segment(3);
    $this->UsuarioModel->delete($id);
    redirect('usuario');
  }

 
  public function pesquisa()
  {
      $this->form_validation->set_rules('pesquisa','PESQUISA','required');
      

      $pesquisa = $this->input->post('pesquisa');

      $dados['usuarios'] = $this->UsuarioModel->search_usuario($pesquisa);
      $this->load->view('usuario', $dados);
  }


  public function login()
  {  
    $this->form_validation->set_rules('nome_usuario','NOME','required');
    $this->form_validation->set_rules('senha','SENHA','required');

    if($this->form_validation->run() == TRUE){

      $nome_usuario = $this->input->post('nome_usuario');
      $senha = $this->input->post('senha');
      $usuario = $this->UsuarioModel->login($nome_usuario, $senha);

      if($usuario){
        $dados = array(
          'id' => $usuario[0]->id,
          'nome_completo' => $usuario[0]->nome_completo,
          'nome_usuario' => $usuario[0]->nome_usuario,
          'tipo' => $usuario[0]->tipo,
          'cpf' => $usuario[0]->cpf,
          'logado' => TRUE
          );

        $this->session->set_userdata($dados);
        switch ($usuario[0]->tipo){
          case 'V':
          redirect('consulta');
          break;
          case 'D':
          redirect('usuario');
          break;
          case 'T':
          redirect('exame');
          break;
          case 'S':
          redirect('validar');
          break;
          default:
          $this->load->view('login');
          break;
        }
      }else{
        $this->load->view('login');
      }
    }
  }

  public function logout() {
    $dados = array(
      'nome_completo' => '',
      'nome_usuario' => '',
      'tipo' => '',
      'cpf' => '',
      'logado' => FALSE
      );

    $this->session->unset_userdata($dados);
    $this->session->sess_destroy();
    $dados1 = array("mensagem" => $this->session->userdata('nome_usuario'));
    $this->load->view('login', $dados1);
  }
}


?> 
