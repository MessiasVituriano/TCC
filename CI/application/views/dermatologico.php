<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>

<div class="container">
  <div class="row z-depth-2">
    <div class="col m10 offset-m1 s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align">Dermatologico</h4>
      </div>
<?php echo form_open_multipart('exame/dermatologico/'.$this->uri->segment(3));?>

<?php foreach ($consultas as $consulta) : ?>
      <div class="row">
        <div class="input-field col s4">
          <label for = "nomeAnimal">Nome animal</label>
          <?php echo form_input('nomeAnimal', $consulta->nomeAnimal, 'class = "validate" disabled'); ?>
        </div>
        <div class="input-field col s4">
          <label for = "nomeProp">Nome propietario</label>
          <?php echo form_input('nomeProp', $consulta->nomeProp, 'class = "validate" disabled'); ?>
        </div>
        <div class="input-field col s4">
          <label for = "especie">Especie</label>
          <?php if($consulta->especie == 'G'){
            echo form_input('especie', 'Gato', 'class = "validate" disabled');
          }else 
          if ($consulta->especie == 'C') {
            echo form_input('especie', 'Cachorro', 'class = "validate" disabled');
          }?>
        </div>
        <?php echo form_hidden('id_consulta', $consulta->id_consulta) ?>
      </div>
    <?php endforeach; ?>
    
    <div class = "row">
      <div class="input-field col s12">      
        <label for = 'data_exame'>Data: </label>
        <?php $today = date("d/m/y");  ?>
        <?php echo form_input('data_exame', $today, 'disabled')?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">  
        <label for = 'data_inicio'>Data inicio</label>
        <?php echo form_input('data_inicio', '', 'class="validate"') ?>
        <?php echo form_error('data_inicio'); ?>
      </div>
      <div class="input-field col s6">  
        <label for = 'duracao'>Dura&ccedil;&atilde;o (dias)</label>
        <?php echo form_input('duracao', '', 'class="validate"') ?>
        <?php echo form_error('duracao'); ?>
      </div>
    </div>


    <div class="row">
      <div class="input-field col s6">  
        <label for = 'sinais'>Sinais</label>
        <?php echo form_textarea('sinais', '', 'class = "materialize-textarea"') ?>
        <?php echo form_error('sinais'); ?>
      </div>
      <div class="input-field col s6">  
        <label for = 'progressao'>Progress&atilde;o</label>
        <?php echo form_textarea('progressao', '', 'class = "materialize-textarea"') ?>
        <?php echo form_error('progressao'); ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">  
        <label for = 'variacao_sazonal'>Varia&ccedil;&atilde;o sazonal</label>
        <?php echo form_textarea('variacao_sazonal', '', 'class = "materialize-textarea"') ?>
        <?php echo form_error('variacao_sazonal'); ?>
      </div>
      <div class="input-field col s6">  
        <label for = 'tratamento'>Tratamento</label>
        <?php echo form_textarea('tratamento', '', 'class = "materialize-textarea"') ?>
        <?php echo form_error('tratamento'); ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s3">
        <input type="checkbox" id="ect" name = "ect"/>
        <label for = "ect">Ectoparasitos</label>        
      </div>
      <div class="input-field col s9">
        <input type="text" id="ectoparasitos" name = "ectoparasitos" disabled />
        <label for = "ectoparasitos">Quais?</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <label for="ambiente">Ambiente</label>        
        <?php echo form_input('ambiente', '', 'class = "validate"') ?>
        <?php echo form_error('ambiente') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <label for="contactantes">Contactantes</label>        
        <?php echo form_input('contactantes', '', 'class = "validate"') ?>
        <?php echo form_error('contactantes') ?>
      </div>
    </div>


    <div class="row">
      <div class="input-field col s12">
        <label for="observacoes">Observa&ccedil;&otilde;es</label>        
        <?php echo form_input('observacoes', '', 'class = "validate"') ?>
        <?php echo form_error('observacoes') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <label for="diagnostico">Diagnostico</label>        
        <?php echo form_textarea('diagnostico', '', 'class = "materialize-textarea"') ?>
        <?php echo form_error('diagnostico') ?>
      </div>
    </div>
    <?php echo form_error('outros'); ?>


    <div class="file-field input-field">
      <div class="btn">
        <span>Imagem</span>
        <input type="file" name="userfile" id = 'userfile' >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
    <?php if (isset($error)) {
      echo $error;
    }?>
    <div class = "row">
     <div class = "center-align col s12">
      <button class="btn waves-effect waves-light" type="submit" value="upload">Realizar exame dermatologico
        <i class="material-icons">done</i>
      </button>
    </div>
  </div> 
      </div>
    </div>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
jQuery.noConflict();
jQuery(function($){
  $("[name = 'data_inicio']").mask("99/99/9999");
});
</script>
<script type="text/javascript">
document.getElementById('ect').onchange = function() {
  document.getElementById('ectoparasitos').disabled = !this.checked;
};
</script>
<?php $this->load->view('includes/footer'); ?>
