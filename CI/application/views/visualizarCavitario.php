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
        <label for = 'volume'>Volume</label>
        <?php echo form_input('volume', $exame->volume, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s4">  
        <label for = 'densidade'>Densidade</label>
        <?php echo form_input('densidade', $exame->densidade, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s4">  
        <label for = 'cor'>Cor</label>
        <?php echo form_input('cor', $exame->cor, 'class="validate" disabled') ?>
      </div>
    </div>

  <div class="row">
    <div class="input-field col s4">
        <label for = "aspecto">Aspecto</label>
      <?php switch ($exame->aspecto) {
        case 'L':
          echo form_input('aspecto', 'Limpido', 'class="validate" disabled');
          break;
        case 'LT':
          echo form_input('aspecto', 'Levemente turva', 'class="validate" disabled');
          break;
        case 'T':
          echo form_input('aspecto', 'Turva', 'class="validate" disabled');
          break;
      } ?>
    </div>  
    <div class="input-field col s4">
      <label for = "coagulacao">Cogula&ccedil;&atilde;o</label>
        <?php if($exame->coagulacao == 'P'){ 
        echo form_input('coagulacao', 'Presenca', 'class="validate" disabled');        
      }else
        echo form_input('coagulacao', 'Ausencia', 'class="validate" disabled');
    ?>  
    </div>
    <div class="input-field col s4">
      <label for = 'pH'>pH</label>
      <?php echo form_input('pH',$exame->pH, 'class = "validate" disabled') ?>
    </div>
  </div>

    <div class="row">
      <div class="input-field col s4">
        <label for = 'glicose'>Glicose</label>
        <?php echo form_input('glicose', $exame->glicose, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s4">
        <label for = 'proteinas'>Proteinas</label>
        <?php echo form_input('proteinas', $exame->proteinas, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s4">
        <label for = 'bilirrubina'>Bilirrubina</label>
        <?php echo form_input('bilirrubina', $exame->bilirrubina, 'class="validate" disabled') ?>
      </div>
    </div>

  <div class="row">
    <div class="input-field col s4">
      <label for = 'sais_biliares'>Sais biliares</label>
      <?php echo form_input('sais_biliares',$exame->sais_biliares, 'class = "validate" disabled') ?>
    </div>
    <div class="input-field col s4">
      <label for = 'celulas_nucleadas'>Celulas nucleadas</label>
      <?php echo form_input('celulas_nucleadas',$exame->celulas_nucleadas, 'class = "validate" disabled') ?>
    </div>
    <div class="input-field col s4">
      <label for = 'sangue_oculto'>Sangue oculto</label>
      <?php if ($exame->sangue_oculto == 'N') {
        echo form_input('sangue_oculto', 'Negativo', 'class="validate" disabled');
      }else
        echo form_input('sangue_oculto', 'Positivo', 'class="validate" disabled');
       ?>
    </div>
  </div>
  <div class = "row">
    <div class="input-field col s4">
      <label for = 'hemacias'>Hem&aacute;cias</label>
      <?php echo form_input('hemacias', $exame->hemacias, 'class = "validate" disabled') ?>
    </div>
    <div class="input-field col s4">
      <label for = 'urobilinogenio'>Urobilinogenio</label>
      <?php echo form_input('urobilinogenio', $exame->urobilinogenio, 'class = "validate" disabled') ?>
    </div>
    <div class="input-field col s4"> 
      <label for = 'nitritos'>Nitritos</label>
      <?php echo form_input('nitritos', $exame->nitritos, 'class = "validate" disabled') ?>      
    </div>
  </div>
  
<div class="row">
  <div class="input-field col s12">
    <label for = "citologia">Citologia</label>
    <?php echo form_textarea('citologia',$exame->citologia, 'class = "materialize-textarea" disabled') ?>
  </div>
</div>
<?php endforeach; ?>

    </div>
  </div>
</div>
<script type="text/javascript">  
        $(document).ready(function() {
        $('select').material_select();
        });
      </script>
<?php $this->load->view('includes/footer'); ?>