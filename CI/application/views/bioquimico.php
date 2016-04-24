<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>

<div class="container">
    <div class="row z-depth-2">
      <div class="col m10 offset-m1 s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align">Bioquimico</h4>
      </div>

<?php echo form_open('exame/bioquimico/'.$this->uri->segment(3)); ?>
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
  <div class="input-field col s3">  
    <label for = 'ureia_serica'>Ur&eacute;ia S&eacute;rica (mg/dL)</label>
    <?php echo form_input('ureia_serica', '', 'class="validate"') ?>
    <?php echo form_error('ureia_serica'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'creatina_serica'>Creatinina S&eacute;rica (mg/dL)</label>
    <?php echo form_input('creatina_serica', '', 'class="validate"') ?>
    <?php echo form_error('creatina_serica'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'alt_tpg'>ALT/TGP (U/mL)</label>
    <?php echo form_input('alt_tpg', '', 'class="validate"') ?>
    <?php echo form_error('alt_tpg'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'ast_tgo'>AST/TGO (U/mL)</label>
    <?php echo form_input('ast_tgo', '', 'class="validate"') ?>
    <?php echo form_error('ast_tgo'); ?>
  </div>
</div>


<div class="row">
  <div class="input-field col s3">  
    <label for = 'fostofase_alcalina'>Fosfatase Alcalina (U/L)</label>
    <?php echo form_input('fostofase_alcalina', '', 'class="validate"') ?>
    <?php echo form_error('fostofase_alcalina'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'lipase'>Lipase (U/L)</label>
    <?php echo form_input('lipase', '', 'class="validate"') ?>
    <?php echo form_error('lipase'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'amilase'>Amilase (U/L)</label>
    <?php echo form_input('amilase', '', 'class="validate"') ?>
    <?php echo form_error('amilase'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'glicose'>Glicose</label>
    <?php echo form_input('glicose', '', 'class="validate"') ?>
    <?php echo form_error('glicose'); ?>
  </div>
</div>


<div class="row">
  <div class="input-field col s4">  
    <label for = 'colesterol_total'>Colesterol Total (MG/dL)</label>
    <?php echo form_input('colesterol_total', '', 'class="validate"') ?>
    <?php echo form_error('colesterol_total'); ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'triglicerideos'>Triglicer&iacute;deos (mg/DL)</label>
    <?php echo form_input('triglicerideos', '', 'class="validate"') ?>
    <?php echo form_error('triglicerideos'); ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'albumina'>Albumina (g/dL)</label>
    <?php echo form_input('albumina', '', 'class="validate"') ?>
    <?php echo form_error('albumina'); ?>
  </div>
</div>

      <div class="col m10 offset-m1 s12">
        <h5 class = "center-align">Bilirrubina</h5>
      </div>


<div class="row">
  <div class="input-field col s4">  
    <label for = 'bilirrubina_total'>Total</label>
    <?php echo form_input('bilirrubina_total', '', 'class="validate"') ?>
    <?php echo form_error('bilirrubina_total'); ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'bilirrubina_direta'>Direta</label>
    <?php echo form_input('bilirrubina_direta', '', 'class="validate"') ?>
    <?php echo form_error('bilirrubina_direta'); ?>  
  </div>
  <div class="input-field col s4">  
    <label for = 'bilirrubina_indireta'>Indireta</label>
    <?php echo form_input('bilirrubina_indireta', '', 'class="validate"') ?>
    <?php echo form_error('bilirrubina_indireta'); ?>
  </div>
</div>

<div class="row">
  <div class="input-field col s3">  
    <label for = 'gama_gt'>Gama GT (U/L)</label>
    <?php echo form_input('gama_gt', '', 'class="validate"') ?>
    <?php echo form_error('gama_gt'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'calcio'>C&aacute;lcio (mg/dL)</label>
    <?php echo form_input('calcio', '', 'class="validate"') ?>
    <?php echo form_error('calcio'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'fosforo'>F&oacute;sforo (mg/dL)</label>
    <?php echo form_input('fosforo', '', 'class="validate"') ?>
    <?php echo form_error('fosforo'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'potassio'>Pot&aacute;ssio (K+)</label>
    <?php echo form_input('potassio', '', 'class="validate"') ?>
    <?php echo form_error('potassio'); ?>
  </div>
</div>

<div class = "row">
  <div class = "input-field col s4">
    <label for = "caracteristica">Caracteristica da amostra</label>
  </div>
    <div class="input-field col s2">
        <input name = "caracteristica" type="radio" id="N" value = "N"/>
        <label for="N">Normal</label>
    </div>
    <div class="input-field col s2">
        <input name = "caracteristica" type="radio" id="I" value = "I"/>
        <label for="I">Ict&iacute;rica</label>
    </div>
    <div class="input-field col s2">
        <input name = "caracteristica" type="radio" id="H" value = "H"/>
        <label for="H">Hemilisada</label>
    </div>
    <div class="input-field col s2">
        <input name = "caracteristica" type="radio" id="L" value = "L"/>
        <label for="L">Lip&ecirc;mica</label>
    </div>
</div>
    <?php echo form_error('caracteristica'); ?>

<div class = "row">
  <div class = "input-field col s4">
    <label for = "teste">Teste</label>
  </div>
    <div class="input-field col s4">
        <input name = "teste" type="radio" id="R" value = "R"/>
        <label for="R">Repetido e confirmado</label>
    </div>
    <div class="input-field col s4">
        <input name = "teste" type="radio" id="C" value = "C"/>
        <label for="C">N&atilde;o realizado</label>
    </div>
</div>
    <?php echo form_error('teste'); ?>

<div class="row">
  <div class="input-field col s12">
    <label for = "outros">Outros</label>
    <?php echo form_textarea('outros','', 'class = "materialize-textarea"') ?>
  </div>
</div>
    <?php echo form_error('outros'); ?>

  <div class = "row">
   <div class = "center-align col s12">
      <button class="btn waves-effect waves-light" type="submit">Realizar exame bioqu&iacute;mico
        <i class="material-icons">done</i>
      </button>
    </div>
  </div> 


<?php echo form_close(); ?>
    </div>
  </div>
</div>
<script type="text/javascript">  
        $(document).ready(function() {
        $('select').material_select();
        });
      </script>
<?php $this->load->view('includes/footer'); ?>

