<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>

<div class="container">
    <div class="row z-depth-2">
      <div class="col m10 offset-m1 s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align">Dados do usu&aacute;rio</h4>
      </div>

    <?php foreach ($usuarios as $usuario) : ?>
	
	<div class="row">
		<div class="input-field col s8">
			<label for = "nome_usuario">Nome Usuário</label>
			<?php echo form_input('nome_usuario', $usuario->nome_usuario, 'class = "validate" class="validate" disabled') ?>
		</div>
        <div class="input-field col s4">
            <label for="tipo">Tipo</label>
            <?php if ($usuario->tipo == 'V'){ 
            	echo form_input('tipo', 'Veterinario', 'class="validate" disabled');
            	}else if ($usuario->tipo == 'S') {
	            	echo form_input('tipo', 'Supervisor', 'class="validate" disabled');
            	}else{
	            	echo form_input('tipo', 'Tecnico', 'class="validate" disabled');
            	}
            ?> 
        </div>      
	</div>

	<div class="row">
		<div class="input-field col s4">
			<label for = "telefone">Telefone</label>
			<?php echo form_input('telefone', $usuario->telefone, 'class="validate" disabled'); ?>
		</div>
		<div class="input-field col s4">
			<label for = "celular">Celular</label>
			<?php echo form_input('celular', $usuario->celular, ' class="validate" disabled') ?>
		</div>
		<div class="input-field col s4">
			<label for = "email">E-mail</label>
			<?php echo form_input('email', $usuario->email, ' class="validate" disabled') ?>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s4">
			<label for = "logradouro">Logradouro</label>
			<?php echo form_input('logradouro', $usuario->logradouro, ' class="validate" disabled') ?>
		</div>
		<div class="input-field col s4">
			<label for = "numero">Numero</label>
			<?php echo form_input('numero', $usuario->numero, ' class="validate" disabled') ?>
		</div>
		<div class="input-field col s4">
			<label for = "bairro">Bairro</label>
			<?php echo form_input('bairro', $usuario->bairro, ' class="validate" disabled') ?>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s4">
			<label for = "cidade">Cidade</label>
			<?php echo form_input('cidade', $usuario->cidade, ' class="validate" disabled') ?>
		</div>
		<div class="input-field col s2">
			<label for = "estado">Estado</label>
			<?php echo form_input('estado', $usuario->estado, ' class="validate" disabled') ?>
		</div>
		<div class="input-field col s2">
			<label for = "cep">CEP</label>
			<?php echo form_input('cep', $usuario->cep, ' class="validate" disabled') ?>
		</div>
		<div class="input-field col s4">
			<label for = "complemento">Complemento</label>
			<?php echo form_input('complemento', $usuario->complemento, ' class="validate" disabled') ?>
		</div>
	</div>

    <?php endforeach; ?>
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