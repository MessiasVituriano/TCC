<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>


<div class="container">
    <div class="row z-depth-2">
      <div class="col m10 offset-m1 s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align">Cadastro de usu&aacute;rio</h4>
      </div>

<?php echo form_open('usuario/insert'); ?>
  
  <div class="row">
    <div class="input-field col s12">
      <label for = "nome_completo">Nome completo</label>
      <?php echo form_input('nome_completo', '', 'class = "validate"') ?>    
      <?php echo form_error('nome_completo'); ?>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <label for = 'nome_usuario' >Nome Usuário</label>
      <?php echo form_input('nome_usuario','', 'class = "validate"') ?>
      <?php echo form_error('nome_usuario'); ?>
    </div>
  </div>


  <div class="row">
    <div class="input-field col s3">
      <label for = "cpf">CPF</label>
      <?php echo form_input('cpf', '', 'class = "validate"') ?>
      <?php echo form_error('cpf'); ?>      
    </div>
    <div class="input-field col s4">
      <label for = "senha">Senha</label>
      <?php echo form_password('senha', '', 'class = "validate"') ?>
      <?php echo form_error('senha'); ?>
    </div>
  </div>

      <div class="row">
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="V" value = "V"/>
            <label for="V">Veterin&aacute;rio</label>
        </div>
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="T" value = "T"/>
            <label for="T">T&eacute;cnico</label>
        </div>
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="S" value = "S"/>
            <label for="S">Supervisor</label>
        </div>
      </div>
  <?php echo form_error('tipo'); ?>


  <div class="row">
    <div class="input-field col s4">
      <label for = "telefone">Telefone</label>
      <?php echo form_input('telefone', '', 'class = "validate"') ?>
      <?php echo form_error('telefone'); ?>
    </div>
    <div class="input-field col s4">
      <label for = "celular">Celular</label>
      <?php echo form_input('celular', '', 'class = "validate"') ?>
      <?php echo form_error('celular'); ?>
    </div>
    <div class="input-field col s4">
      <label for = "email">E-mail</label>
      <?php echo form_input('email', '', 'class = "validate"') ?>
      <?php echo form_error('email'); ?>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      <label for = "logradouro">Logradouro</label>
      <?php echo form_input('logradouro', '', 'class = "validate"') ?>
      <?php echo form_error('logradouro'); ?>
    </div>
    <div class="input-field col s4">
      <label for = "numero">Numero</label>
      <?php echo form_input('numero', '', 'class = "validate"') ?>
      <?php echo form_error('numero'); ?>
    </div>
    <div class="input-field col s4">
      <label for = "bairro">Bairro</label>
      <?php echo form_input('bairro', '', 'class = "validate"') ?>
      <?php echo form_error('bairro'); ?>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s4">
      <label for = "cidade">Cidade</label>
      <?php echo form_input('cidade', '', 'class = "validate"') ?>
      <?php echo form_error('cidade'); ?>
    </div>
    <div class="input-field col s2">
      <label for = "estado">Estado</label>
      <?php echo form_input('estado', '', 'class = "validate" maxLength = 2') ?>
      <?php echo form_error('estado'); ?>
    </div>
    <div class="input-field col s2">
      <label for = "cep">CEP</label>
      <?php echo form_input('cep', '', 'class = "validate"') ?>
      <?php echo form_error('cep'); ?>
    </div>
    <div class="input-field col s4">
      <label for = "complemento">Complemento</label>
      <?php echo form_input('complemento', '', 'class = "validate"') ?>
      <?php echo form_error('complemento'); ?>
    </div>
  </div>

    <div class = "row">
     <div class = "center-align col s12">
        <button class="btn waves-effect waves-light" type="submit">Cadastro
          <i class="mdi-content-add right"></i>
        </button>
      </div>
    </div>              
    <?php echo form_close(); ?>
    </div>
  </div>
</div>

<script type="text/javascript"> 
      jQuery.noConflict();
      jQuery(function($){
         $("[name = 'cpf']").mask("999.999.999-99");
         $("[name = 'celular']").mask("99-99999-9999");
         $("[name = 'telefone']").mask("99-9999-9999");
         $("[name = 'cep']").mask("99.999-999");
         });
      </script> 
<?php $this->load->view('includes/footer'); ?>