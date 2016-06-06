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


<?php foreach ($exames as $exame): ?>

<?php if ($exame->status == 'R') {?>
        <h4 style="color:blue;" class = "center-align">Ainda n&atilde;o validado <i class="material-icons">error</i></h4>
<?php }elseif ($exame->status == 'V') {?>
         <h4 style="color:green;" class = "center-align">Validado <i class="material-icons">done_all</i></h4>
<?php }else{ ?>
         <h4 style="color:red;" class = "center-align">N&atilde;o validado <i class="material-icons">highlight_off</i></h4>
<?php } ?>

<div class = "row">
  <div class="input-field col s12">      
  <label for = 'data_exame'>Data: </label>
  <?php $data = strtotime($exame->data_exame); ?>
  <?php echo form_input('data_exame', date("d-m-Y",$data), 'disabled')?>
  </div>
</div>

<div class="row">
  <div class="input-field col s4">  
    <label for = 'aspecto_fisico'>Aspecto f&iacute;sico</label>
    <?php echo form_input('aspecto_fisico', $exame->aspecto_fisico, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'protei_plasmatica'>Prote&iacute;nas plasm&aacute;tica (g/dL)</label>
    <?php echo form_input('protei_plasmatica', $exame->protei_plasmatica, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'fibrinogenio'>Fibrinog&ecirc;nio(mg/dL)</label>
    <?php echo form_input('fibrinogenio', $exame->fibrinogenio, 'class="validate" disabled') ?>
  </div>
</div>

      <div class="col m10 offset-m1 s12">
        <h5 class = "center-align">Eritograma</h5>
      </div>

<div class="row">
  <div class="input-field col s3">  
    <label for = 'hemacia'>Hem&aacute;cias (x1000/µL)</label>
    <?php echo form_input('hemacia', $exame->hemacia, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'hematocrito'>Hemat&oacute;crito (%)</label>
    <?php echo form_input('hematocrito', $exame->hematocrito, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'hemogloblina'>Hemoglobina (g/dL)</label>
    <?php echo form_input('hemogloblina', $exame->hemogloblina, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s1">  
    <label for = 'vgm'>VGM</label>
    <?php echo form_input('vgm', $exame->vgm, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s2">  
    <label for = 'chgm'>CHGM</label>
    <?php echo form_input('chgm', $exame->chgm, 'class="validate" disabled') ?>
  </div>
</div>

<div class="row">
  <div class = "input-field col s4">
    <label for = "reticulocitos">Reticul&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'reticulocit_absoluto'>Absoluto</label>
    <?php echo form_input('reticulocit_absoluto', $exame->reticulocit_absoluto, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'reticulocit_relativo'>Relativo (%)</label>
    <?php echo form_input('reticulocit_relativo', $exame->reticulocit_absoluto, 'class="validate" disabled') ?>
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
    <?php echo form_input('mielocitos', $exame->mielocitos, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'mielocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('mielocitos_relativo', $exame->mielocitos_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Metamel&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'metamielocitos'>Absoluto</label>
    <?php echo form_input('metamielocitos', $exame->metamielocitos, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'metamielocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('metamielocitos_relativo', $exame->metamielocitos_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Bast&otilde;es</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'bastoes'>Absoluto</label>
    <?php echo form_input('bastoes', $exame->bastoes, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'bastoes_relativo'>Relativo (%)</label>
    <?php echo form_input('bastoes_relativo', $exame->bastoes_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Segmentados</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'segmentados'>Absoluto</label>
    <?php echo form_input('segmentados', $exame->segmentados, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'segmentados_relativo'>Relativo (%)</label>
    <?php echo form_input('segmentados_relativo', $exame->segmentados_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Linf&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'linfocitos'>Absoluto</label>
    <?php echo form_input('linfocitos', $exame->linfocitos, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'linfocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('linfocitos_relativo', $exame->linfocitos_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Mon&oacute;citos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'monocitos'>Absoluto</label>
    <?php echo form_input('monocitos', $exame->monocitos, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'monocitos_relativo'>Relativo (%)</label>
    <?php echo form_input('monocitos_relativo', $exame->monocitos_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Eosin&oacute;filos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'eosinofilos'>Absoluto</label>
    <?php echo form_input('eosinofilos', $exame->eosinofilos, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'eosinofilos_relativo'>Relativo (%)</label>
    <?php echo form_input('eosinofilos_relativo', $exame->eosinofilos_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class = "input-field col s4">
    <label >Bas&oacute;filos</label>
  </div>
  <div class="input-field col s4">  
    <label for = 'basolitos'>Absoluto</label>
    <?php echo form_input('basolitos', $exame->basolitos, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'basolitos_relativo'>Relativo (%)</label>
    <?php echo form_input('basolitos_relativo', $exame->basolitos_relativo, 'class="validate" disabled') ?>
  </div>  
</div>
<div class="row">
  <div class="input-field col s4">  
    <label for = 'plaquetas'>Plaquetas</label>
    <?php echo form_input('plaquetas', $exame->plaquetas, 'class="validate" disabled') ?>
  </div>
</div>
<div class="row">
  <div class="input-field col s12">
    <label for = "observacoes">Observa&ccedil;&otilde;es</label>
    <?php echo form_textarea('observacoes',$exame->observacoes, 'class = "materialize-textarea" disabled') ?>
  </div>
</div>
<?php endforeach; ?>
  <?php echo form_open('consulta/visualizarHemograma/'.$this->uri->segment(3)); ?>
    <div class = "row">
      <div class = "center-align col s12">
        <button class="red btn waves-effect waves-light" name = "salvarPDF" value = "sim">PDF
        <i class="material-icons red">file_download</i>
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

