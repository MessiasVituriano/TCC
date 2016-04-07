<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>
<div class="container">
  <div class="row z-depth-2">
    <div class="col m10 offset-m1 s12">
      <h1 class="center-align">Login</h1>
      <?php echo form_open('usuario/login'); ?>
      <div class="row">
        <div class="row">
          <div class="center-align m10 offset-m1  input-field col s6">
            <label for="nome_usuario">Nome de usu&aacute;rio</label>
            <?php echo form_input('nome_usuario','', 'class = "validate"'); ?>
            <?php echo form_error('nome_usuario') ?>
          </div>
        </div>
        <div class = "row">
          <div class="center-align m10 offset-m1 input-field col s6">
            <label for="senha">Senha</label>
            <?php echo form_password('senha','','class = "validate"'); ?>
            <?php echo form_error('senha') ?>
          </div>
        </div>
      <?php if(isset($mensagem)) echo $mensagem; ?>
        <div class = "row">
         <div class = "center-align col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Login
            <i class="mdi-action-lock-open right"></i>
          </button>
        </div>
      </div>              
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
</div>
<?php $this->load->view('includes/footer'); ?>