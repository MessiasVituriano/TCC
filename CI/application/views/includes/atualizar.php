<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>
<?php $id = $this->uri->segment(3);?>


<?php echo form_open('usuario/update_usuario'); ?>
    <?php foreach ($usuarios as $usuario) : ?>

	<?php echo form_hidden('id', $this->uri->segment(3)) ?>

	<label>Nome Usuário</label>
	<?php echo form_input('nome_usuario', $usuario->nome_usuario) ?>

	<label>Nome completo</label>
	<?php echo form_input('nome_completo', $usuario->nome_completo) ?>

	<label>Senha</label>
	<?php echo form_input('senha', $usuario->senha) ?>

	<label>CPF</label>
	<?php echo form_input('cpf', $usuario->cpf) ?>

	<label>Telefone</label>
	<?php echo form_input('telefone', $usuario->telefone) ?>

	<label>Celular</label>
	<?php echo form_input('celular', $usuario->celular) ?>

	<label>E-mail</label>
	<?php echo form_input('email', $usuario->email) ?>

      <div class="row">
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="V" value = "V" <?php if ($usuario->tipo == 'V') echo "checked" ?> />
            <label for="V">Veterin&aacute;rio</label>
        </div>
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="T" value = "T" <?php if ($usuario->tipo == 'T') echo "checked" ?>/>
            <label for="T">T&eacute;cnico</label>
        </div>
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="S" value = "S" <?php if ($usuario->tipo == 'S') echo "checked" ?>/>
            <label for="S">Supervisor</label>
        </div>
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="D" value = "D" <?php if ($usuario->tipo == 'D') echo "checked" ?>/>
            <label for="S">Supervisor</label>
        </div>
      </div>

	<label>Logradouro</label>
	<?php echo form_input('logradouro', $usuario->logradouro) ?>

	<label>Numero</label>
	<?php echo form_input('numero', $usuario->numero) ?>

	<label>Bairro</label>
	<?php echo form_input('bairro', $usuario->bairro) ?>

	<label>Cidade</label>
	<?php echo form_input('cidade', $usuario->cidade) ?>

	<label>Estado</label>
	<?php echo form_input('estado', $usuario->estado) ?>

	<label>CEP</label>
	<?php echo form_input('cep', $usuario->cep) ?>

	<label>Complemento</label>
	<?php echo form_input('complemento', $usuario->complemento) ?>


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
    <?php endforeach; ?>

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