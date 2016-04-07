<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>

<?php echo form_open('usuario/insert'); ?>
  
  
  <label>Nome Usuário</label>
  <?php echo form_input('nome_usuario') ?>

  <label>Nome completo</label>
  <?php echo form_input('nome_completo') ?>

  <label>Senha</label>
  <?php echo form_input('senha') ?>

  <label>CPF</label>
  <?php echo form_input('cpf') ?>

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

  <label>Telefone</label>
  <?php echo form_input('telefone') ?>

  <label>Celular</label>
  <?php echo form_input('celular') ?>

  <label>E-mail</label>
  <?php echo form_input('email') ?>


  <label>Logradouro</label>
  <?php echo form_input('logradouro') ?>

  <label>Numero</label>
  <?php echo form_input('numero') ?>

  <label>Bairro</label>
  <?php echo form_input('bairro') ?>

  <label>Cidade</label>
  <?php echo form_input('cidade') ?>

  <label>Estado</label>
  <?php echo form_input('estado') ?>

  <label>CEP</label>
  <?php echo form_input('cep') ?>

  <label>Complemento</label>
  <?php echo form_input('complemento') ?>


  <?php echo form_error('nome_usuario'); ?>
  <?php echo form_error('nome_completo'); ?>
  <?php echo form_error('tipo'); ?>
  <?php echo form_error('senha'); ?>
  <?php echo form_error('cpf'); ?>
  <?php echo form_error('telefone'); ?>
  <?php echo form_error('celular'); ?>
  <?php echo form_error('email'); ?>
  <?php echo form_error('logradouro'); ?>
  <?php echo form_error('numero'); ?>
  <?php echo form_error('bairro'); ?>
  <?php echo form_error('cidade'); ?>
  <?php echo form_error('estado'); ?>
  <?php echo form_error('cep'); ?>
  <?php echo form_error('complemento'); ?>

  <br>

  <input type="submit">
    
<?php echo form_close(); ?>


<script type="text/javascript"> 
      jQuery.noConflict();
      jQuery(function($){
         $("#cpf").mask("999.999.999-99");
         $("#celular").mask("99-99999-9999");
         $("#telefone").mask("99-9999-9999");
         $("#cep").mask("99.999-999");
         });
      </script> 
<?php $this->load->view('includes/footer'); ?>