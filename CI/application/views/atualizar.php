<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>
<?php $id = $this->uri->segment(3);?>

<div class="container">
    <div class="row z-depth-2">
      <div class="col m10 offset-m1 s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align">Editar usu&aacute;rio</h4>
      </div>

<?php echo form_open('usuario/update_usuario/'.$this->uri->segment(3)); ?>
    <?php foreach ($usuarios as $usuario) : ?>

	<?php echo form_hidden('id', $this->uri->segment(3)) ?>
	<?php echo form_hidden('cpf', $usuario->cpf) ?>
	<?php echo form_hidden('nome_completo', $usuario->nome_completo) ?>
	
	<div class="row">
		<div class="input-field col s6">
			<label for = "nome_usuario">Nome Usuário</label>
			<?php echo form_input('nome_usuario', $usuario->nome_usuario, 'class = "validate"') ?>
			<?php echo form_error('nome_usuario'); ?>
		</div>
		<div class="input-field col s6">
			<label for = "senha">Senha</label>
			<?php echo form_password('senha', $usuario->senha) ?>
			<?php echo form_error('senha'); ?>
		</div>
	</div>

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
    </div>
	<?php echo form_error('tipo'); ?>

	<div class="row">
		<div class="input-field col s4">
			<label for = "telefone">Telefone</label>
			<?php echo form_error('telefone'); ?>
			<?php echo form_input('telefone', $usuario->telefone) ?>
		</div>
		<div class="input-field col s4">
			<label for = "celular">Celular</label>
			<?php echo form_input('celular', $usuario->celular) ?>
			<?php echo form_error('celular'); ?>
		</div>
		<div class="input-field col s4">
			<label for = "email">E-mail</label>
			<?php echo form_input('email', $usuario->email) ?>
			<?php echo form_error('email'); ?>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s4">
			<label for = "logradouro">Logradouro</label>
			<?php echo form_input('logradouro', $usuario->logradouro) ?>
			<?php echo form_error('logradouro'); ?>
		</div>
		<div class="input-field col s4">
			<label for = "numero">Numero</label>
			<?php echo form_input('numero', $usuario->numero) ?>
			<?php echo form_error('numero'); ?>
		</div>
		<div class="input-field col s4">
			<label for = "bairro">Bairro</label>
			<?php echo form_input('bairro', $usuario->bairro) ?>
			<?php echo form_error('bairro'); ?>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s4">
			<label for = "cidade">Cidade</label>
			<?php echo form_input('cidade', $usuario->cidade) ?>
			<?php echo form_error('cidade'); ?>
		</div>
		<div class="input-field col s2">
			<label for = "estado">Estado</label>
			<?php echo form_input('estado', $usuario->estado) ?>
			<?php echo form_error('estado'); ?>
		</div>
		<div class="input-field col s2">
			<label for = "cep">CEP</label>
			<?php echo form_input('cep', $usuario->cep) ?>
			<?php echo form_error('cep'); ?>
		</div>
		<div class="input-field col s4">
			<label for = "complemento">Complemento</label>
			<?php echo form_input('complemento', $usuario->complemento) ?>
			<?php echo form_error('complemento'); ?>
		</div>
	</div>

    <?php endforeach; ?>
    <div class="row">
    	<div class = "center-align col s12">
    		<button class="btn waves-effect waves-light" type="submit" name="action">Editar
    			<i class="mdi-action-lock-open right"></i>
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