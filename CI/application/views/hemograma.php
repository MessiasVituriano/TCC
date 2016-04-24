<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>

<div class="container">
    <div class="row z-depth-2">
      <div class="col m10 offset-m1 s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align">Hemograma</h4>
      </div>


<?php echo form_open('exame/hemograma/'.$this->uri->segment(3)); ?>
  
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
  <div class="input-field col s4">  
    <label for = 'aspecto_fisico'>Aspecto f&iacute;sico</label>
    <?php echo form_input('aspecto_fisico', '', 'class="validate"') ?>
    <?php echo form_error('aspecto_fisico'); ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'protei_plasmatica'>Prote&iacute;nas plasm&aacute;tica (g/dL)</label>
    <?php echo form_input('protei_plasmatica', '', 'class="validate"') ?>
    <?php echo form_error('protei_plasmatica'); ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'fibrinogenio'>Fibrinog&ecirc;nio(mg/dL)</label>
    <?php echo form_input('fibrinogenio', '', 'class="validate"') ?>
    <?php echo form_error('fibrinogenio'); ?>
  </div>
</div>

      <div class="col m10 offset-m1 s12">
        <h5 class = "center-align">Eritograma</h5>
      </div>

<div class="row">
  <div class="input-field col s3">  
    <label for = 'hemacia'>Hem&aacute;cias (x1000/µL)</label>
    <?php echo form_input('hemacia', '', 'class="validate"') ?>
    <?php echo form_error('hemacia'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'hematocrito'>Hemat&oacute;crito (%)</label>
    <?php echo form_input('hematocrito', '', 'class="validate"') ?>
    <?php echo form_error('hematocrito'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'hemogloblina'>Hemoglobina (g/dL)</label>
    <?php echo form_input('hemogloblina', '', 'class="validate"') ?>
    <?php echo form_error('hemogloblina'); ?>
  </div>
  <div class="input-field col s1">  
    <label for = 'vgm'>VGM</label>
    <?php echo form_input('vgm', '', 'class="validate"') ?>
    <?php echo form_error('vgm'); ?>
  </div>
  <div class="input-field col s2">  
    <label for = 'chgm'>CHGM</label>
    <?php echo form_input('chgm', '', 'class="validate"') ?>
    <?php echo form_error('chgm, group)'); ?>
  </div>
</div>

<div class="row">
  <div class = "input-field col s4">
    <label for = "reticulocitos">Reticul&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'reticulocit_absoluto'>Absoluto</label>
    <?php echo form_input('reticulocit_absoluto', '', 'class="validate"') ?>
    <?php echo form_error('reticulocit_absoluto'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'reticulocit_relativo'>Relativo (%)</label>
    <?php echo form_input('reticulocit_relativo', '', 'class="validate"') ?>
    <?php echo form_error('reticulocit_absoluto'); ?>
  </div>  
</div>



      <div class="col m10 offset-m1 s12">
        <h5 class = "center-align">Leucograma</h5>
      </div>


<div class="row">
  <div class = "input-field col s4">
    <label >Miel&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'mielocitos'>Absoluto</label>
    <?php echo form_input('mielocitos', '', 'class="validate"') ?>
    <?php echo form_error('mielocitos'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'mielocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('mielocitos_relativo', '', 'class="validate"') ?>
    <?php echo form_error('mielocitos_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Metamel&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'metamielocitos'>Absoluto</label>
    <?php echo form_input('metamielocitos', '', 'class="validate"') ?>
    <?php echo form_error('metamielocitos'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'metamielocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('metamielocitos_relativo', '', 'class="validate"') ?>
    <?php echo form_error('metamielocitos_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Bast&otilde;es</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'bastoes'>Absoluto</label>
    <?php echo form_input('bastoes', '', 'class="validate"') ?>
    <?php echo form_error('bastoes'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'bastoes_relativo'>Relativo (%)</label>
    <?php echo form_input('bastoes_relativo', '', 'class="validate"') ?>
    <?php echo form_error('bastoes_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Segmentados</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'segmentados'>Absoluto</label>
    <?php echo form_input('segmentados', '', 'class="validate"') ?>
    <?php echo form_error('segmentados'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'segmentados_relativo'>Relativo (%)</label>
    <?php echo form_input('segmentados_relativo', '', 'class="validate"') ?>
    <?php echo form_error('segmentados_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Linf&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'linfocitos'>Absoluto</label>
    <?php echo form_input('linfocitos', '', 'class="validate"') ?>
    <?php echo form_error('linfocitos'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'linfocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('linfocitos_relativo', '', 'class="validate"') ?>
    <?php echo form_error('linfocitos_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Mon&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'monocitos'>Absoluto</label>
    <?php echo form_input('monocitos', '', 'class="validate"') ?>
    <?php echo form_error('monocitos'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'monocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('monocitos_relativo', '', 'class="validate"') ?>
    <?php echo form_error('monocitos_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Eosin&oacute;filos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'eosinofilos'>Absoluto</label>
    <?php echo form_input('eosinofilos', '', 'class="validate"') ?>
    <?php echo form_error('eosinofilos'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'eosinofilos_relativo'>Relativo (%)</label>
    <?php echo form_input('eosinofilos_relativo', '', 'class="validate"') ?>
    <?php echo form_error('eosinofilos_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Bas&oacute;filos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'basolitos'>Absoluto</label>
    <?php echo form_input('basolitos', '', 'class="validate"') ?>
    <?php echo form_error('basolitos'); ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'basolitos_relativo'>Relativo (%)</label>
    <?php echo form_input('basolitos_relativo', '', 'class="validate"') ?>
    <?php echo form_error('basolitos_relativo'); ?>
  </div>  
</div>
<div class="row">
  <div class="input-field col s4">  
    <label for = 'plaquetas'>Plaquetas</label>
    <?php echo form_input('plaquetas', '', 'class="validate"') ?>
    <?php echo form_error('plaquetas'); ?>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label for = "observacoes">Observa&ccedil;&otilde;es</label>
    <?php echo form_textarea('observacoes','', 'class = "materialize-textarea"') ?>
    <?php echo form_error('observacoes'); ?>
  </div>
</div>

  <div class = "row">
   <div class = "center-align col s12">
      <button class="btn waves-effect waves-light" type="submit">Realizar exame Hemograma
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

