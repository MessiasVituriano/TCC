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

<?php foreach ($exames as $exame) : ?>
      <div class="row">
        <div class="input-field col s4">
          <label for = "nomeAnimal">Nome animal</label>
          <?php echo form_input('nomeAnimal', $exame->nomeAnimal, 'class = "validate" disabled'); ?>
        </div>
        <div class="input-field col s4">
          <label for = "especie">Especie</label>
          <?php if($exame->especie == 'G'){
            echo form_input('especie', 'Gato', 'class = "validate" disabled');
          }else 
          if ($exame->especie == 'C') {
            echo form_input('especie', 'Cachorro', 'class = "validate" disabled');
          }?>
        </div>
        <div class = "row">
          <div class="input-field col s4">      
            <label for = 'data_exame'>Data: </label>
                <?php $data = strtotime($exame->data_exame); ?>
              <?php echo form_input('data_exame', date("d-m-Y",$data), 'disabled')?>
          </div>
        </div>
      </div>

    <div class="row">
      <div class="input-field col s6">  
        <label for = 'data_inicio'>Data inicio</label>
        <?php echo form_input('data_inicio', $exame->data_inicio, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s6">  
        <label for = 'duracao'>Dura&ccedil;&atilde;o (dias)</label>
        <?php echo form_input('duracao', $exame->duracao, 'class="validate" disabled') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">  
        <label for = 'sinais'>Sinais</label>
        <?php echo form_textarea('sinais', $exame->sinais, 'class = "materialize-textarea" disabled') ?>
      </div>
      <div class="input-field col s6">  
        <label for = 'progressao'>Progress&atilde;o</label>
        <?php echo form_textarea('progressao', $exame->progressao, 'class = "materialize-textarea" disabled') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">  
        <label for = 'variacao_sazonal'>Varia&ccedil;&atilde;o sazonal</label>
        <?php echo form_textarea('variacao_sazonal', $exame->variacao_sazonal, 'class = "materialize-textarea" disabled') ?>
      </div>
      <div class="input-field col s6">  
        <label for = 'tratamento'>Tratamento</label>
        <?php echo form_textarea('tratamento', $exame->tratamento, 'class = "materialize-textarea" disabled') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <label for = "ect">Ectoparasitos</label>
        <?php echo form_input('ect', $exame->ectoparasitos, 'class = "validate" disabled') ?>        
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <label for="ambiente">Ambiente</label>        
        <?php echo form_input('ambiente', $exame->ambiente, 'class = "validate" disabled') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <label for="contactantes">Contactantes</label>        
        <?php echo form_input('contactantes', $exame->contactantes, 'class = "validate" disabled') ?>
      </div>
    </div>


    <div class="row">
      <div class="input-field col s12">
        <label for="observacoes">Observa&ccedil;&otilde;es</label>        
        <?php echo form_input('observacoes', $exame->observacoes, 'class = "validate" disabled') ?>
        <?php echo form_error('observacoes') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <label for="diagnostico">Diagnostico</label>        
        <?php echo form_textarea('diagnostico', $exame->diagnostico, 'class = "materialize-textarea" disabled') ?>
      </div>
    </div>

          <?php  echo '<img class="responsive-img" src="data:image/jpeg;base64,'.base64_encode( $exame->imagem ).'"/>';?>
        <?php endforeach; ?>
 
      </div>
    </div>
</div>

<?php $this->load->view('includes/footer'); ?>
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
s