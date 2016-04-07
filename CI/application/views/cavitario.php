<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>

<div class="container">
    <div class="row z-depth-2">
      <div class="col m10 offset-m1 s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align">Cavit&aacute;rio</h4>
      </div>


<?php echo form_open('exame/cavitario'); ?>

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
  </div>
      <?php echo form_hidden('id_consulta', $consulta->id_consulta) ?>
<?php endforeach; ?>  
  
<div class = "row">
  <div class="input-field col s12">      
  <label for = 'data_exame'>Data: </label>
  <?php $today = date("d/m/y");  ?>
  <?php echo form_input('data_exame', $today, 'disabled')?>
  </div>
</div>

<div class="row">
  <div class="input-field col s4">  
  <label for = 'volume'>Volume</label>
  <?php echo form_input('volume', '', 'class="validate"') ?>
  <?php echo form_error('volume'); ?>
  </div>
  <div class="input-field col s4">  
  <select name = 'cor'>
    <option value="" disabled selected>Cor</option>
    <option value="Amarelo claro">Amarelo claro/P&aacute;lido</option>
    <option value="Amarelo escuro">Amarelo escuro/P&aacute;lido</option>
    <option value="Alaranjado">&Acirc;mbar a amarelo esverdeado</option>
    <option value="Marron">Marron</option>
    <option value="Azul">Azul esverdeado</option>
  </select>
  <?php echo form_error('cor'); ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'densidade'>Densidade</label>
    <?php echo form_input('densidade', '', 'class="validate"') ?>
    <?php echo form_error('densidade'); ?>
  </div>
</div>


  <div class="row">
    <div class="input-field col s3">
        <label for="aspecto">Aspecto</label>
    </div>
    <div class="input-field col s3">
        <input name = "aspecto" type="radio" id="L" value = "L"/>
        <label for="L">L&iacute;mpido</label>
    </div>
    <div class="input-field col s3">
        <input name = "aspecto" type="radio" id="LT" value = "LT"/>
        <label for="LT">Levemente turva</label>
    </div>
    <div class="input-field col s3">
        <input name = "aspecto" type="radio" id="T" value = "T"/>
        <label for="T">Turva</label>
    </div>
    <?php echo form_error('aspecto'); ?>
  </div>

  <div class="row">
    <div class="input-field col s3">
        <label for="coagulacao">Coagula&ccedil;ao</label>
    </div>
    <div class="input-field col s3">
        <input name = "coagulacao" type="radio" id="C" value = "C"/>
        <label for="C">Presen&ccedil;a</label>
    </div>
    <div class="input-field col s3">
        <input name = "coagulacao" type="radio" id="A" value = "A"/>
        <label for="A">Aus&ecirc;ncia</label>
    <?php echo form_error('coagulacao'); ?>
    </div>
    <div class="input-field col s3">
      <label for = 'pH'>pH</label>
      <?php echo form_input('pH','', 'class = validate') ?>
      <?php echo form_error('pH'); ?>
    </div>
  </div>

<div class="row">
 <div class="input-field col s3">
  <select name = 'glicose'>
    <option value="" disabled selected>Glicose</option>
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="++">++</option>
    <option value="+++">+++</option>
    <option value="++++">++++</option>
  </select>
    <?php echo form_error('glicose'); ?>
</div>
 <div class="input-field col s3">
  <select name = 'proteinas'>
    <option value="" disabled selected>Prote&iacute;nas</option>
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="++">++</option>
    <option value="+++">+++</option>
    <option value="++++">++++</option>
  </select>
    <?php echo form_error('proteinas'); ?>
</div>
  <div class="input-field col s3">
  <select name = 'cetonas'>
    <option value="" disabled selected>Cetonas</option>
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="++">++</option>
    <option value="+++">+++</option>
    <option value="++++">++++</option>
  </select>
    <?php echo form_error('cetonas'); ?>
  </div>
  <div class="input-field col s3">
  <select name = 'bilirrubina'>
    <option value="" disabled selected>Bilirrubina</option>
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="++">++</option>
    <option value="+++">+++</option>
  </select>
    <?php echo form_error('bilirrubina'); ?>
  </div>
</div>


  <div class="row">
    <div class="input-field col s3">
        <label for="sangue_oculto">Sangue oculto</label>
    </div>
    <div class="input-field col s4">
        <input name = "sangue_oculto" type="radio" id="N" value = "Negativo"/>
        <label for="N">Negativo</label>
    </div>
    <div class="input-field col s3">
        <input name = "sangue_oculto" type="radio" id="P" value = "Positivo"/>
        <label for="P">Positivo</label>
    </div>
    <?php echo form_error('sangue_oculto'); ?>
  </div>

  <div class="row">
    <div class="input-field col s4">
      <label for = 'sais_biliares'>Sais biliares</label>
      <?php echo form_input('sais_biliares','', 'class = "validate"') ?>
      <?php echo form_error('sais_biliares'); ?>
    </div>
    <div class="input-field col s4">
      <label for = 'celulas_nucleadas'>Celulas nucleadas</label>
      <?php echo form_input('celulas_nucleadas','', 'class = "validate"') ?>
      <?php echo form_error('celulas_nucleadas'); ?>
    </div>
  </div>
  <div class = "row">
    <div class="input-field col s4">
      <label for = 'hemacias'>Hem&aacute;cias</label>
      <?php echo form_input('hemacias') ?>
      <?php echo form_error('hemacias'); ?>
    </div>
    <div class="input-field col s4">
      <label for = 'urobilinogenio'>Urobilinogenio</label>
      <?php echo form_input('urobilinogenio') ?>
      <?php echo form_error('urobilinogenio'); ?>
    </div>
    <div class="input-field col s4"> 
      <label for = 'nitritos'>Nitritos</label>
      <?php echo form_input('nitritos') ?>      
      <?php echo form_error('nitritos'); ?>
    </div>
  </div>
  
<div class="row">
  <div class="input-field col s12">
    <label for = "citologia">Citologia</label>
    <?php echo form_textarea('citologia','', 'class = "materialize-textarea"') ?>
    <?php echo form_error('citologia'); ?>
  </div>
</div>

  <div class = "row">
   <div class = "center-align col s12">
      <button class="btn waves-effect waves-light" type="submit">Realizar exame cavit&aacute;rio
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