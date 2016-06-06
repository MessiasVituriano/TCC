  <?php
  $this->load->view('includes/header.php');
  $this->load->view('includes/nav.php');
  ?>

  <div class="container">
    <div class="row z-depth-2">
      <div class="col m10 offset-m1 s12">
        <div class="col m10 offset-m1 s12">
          <h4 class = "center-align">Urinalise</h4>
        </div>

  <?php foreach ($exames as $exame):?>

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


      <div class = "row">
       <div class="input-field col s12">
        <label for = 'metodo'>Metodo</label>
        <?php echo form_input('metodo', $exame->metodo, 'disabled')?> 
      </div>
    </div>

    <div class="row">
      <div class="input-field col s3">  
        <label for = 'volume'>Volume</label>
        <?php echo form_input('volume', $exame->volume, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s3">  
        <label for = 'densidade'>Densidade</label>
        <?php echo form_input('densidade', $exame->densidade, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s3">  
        <label for = 'cor'>Cor</label>
        <?php echo form_input('cor', $exame->cor, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s3">  
        <label for = 'odor'>Odor</label>
        <?php echo form_input('odor', $exame->odor, 'class="validate" disabled') ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s3">
        <label for = 'corpos_cetonicos'>Corpos cetonicos</label>
        <?php echo form_input('corpos_cetonicos', $exame->corpos_cetonicos, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s3">
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
      <div class="input-field col s3">
        <label for = "coagulacao">Cogula&ccedil;&atilde;o</label>
      <?php if($exame->coagulacao == 'P'){ 
          echo form_input('coagulacao', 'Presenca', 'class="validate" disabled');        
      }else
          echo form_input('coagulacao', 'Ausencia', 'class="validate" disabled');
      ?>  
      </div>
      <div class="input-field col s3">
        <label for = 'pH'>pH</label>
        <?php echo form_input('pH' , $exame->pH, 'class = validate disabled') ?>
      </div>    
    </div>

    <div class="row">
      <div class="input-field col s3">
        <label for = 'glicose'>Glicose</label>
        <?php echo form_input('glicose', $exame->glicose, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s3">
        <label for = 'proteinas'>Proteinas</label>
        <?php echo form_input('proteinas', $exame->proteinas, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s3">
        <label for = 'bilirrubina'>Bilirrubina</label>
        <?php echo form_input('bilirrubina', $exame->bilirrubina, 'class="validate" disabled') ?>
      </div>
      <div class="input-field col s3">
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
      <label for = 'hemacias'>Hem&aacute;cias (cél/cp 400x)</label>
      <?php echo form_input('hemacias', $exame->hemacias, 'class = "validate" disabled') ?>
    </div>
    <div class="input-field col s4">
      <label for = 'urobilinogenio'>Urobilinogenio</label>
      <?php echo form_input('urobilinogenio', $exame->urobilinogenio, 'class = "validate" disabled') ?>
    </div>
    <div class="input-field col s4"> 
      <label for = 'leucocitos'>Leocitos (cél/cp 400x)</label>
      <?php echo form_input('leucocitos', $exame->leucocitos, 'class = "validate" disabled') ?> 
    </div>
  </div>

  <div class = "row">
    <div class="col m10 offset-m1 s12">
      <h5 class = "center-align">Celulas epiteliais (cél/cp 400x)</h5>
    </div>
    
    <div class = "row">
      <div class="input-field col s3">
        <label for = 'ce_renais'>Renais</label>
        <?php echo form_input('ce_renais', $exame->ce_renais, 'class = "validate" disabled') ?>
      </div>
      <div class="input-field col s3">
        <label for = 'ce_pelve'>Pelve</label>
        <?php echo form_input('ce_pelve', $exame->ce_pelve, 'class = "validate" disabled') ?>
      </div>
      <div class="input-field col s3">
        <label for = 'ce_versicais'>Versicais</label>
        <?php echo form_input('ce_versicais', $exame->ce_versicais, 'class = "validate" disabled') ?>
      </div>
      <div class="input-field col s3"> 
        <label for = 'ce_uretrais'>Uretrais</label>
        <?php echo form_input('ce_uretrais', $exame->ce_uretrais, 'class = "validate" disabled') ?>      
      </div>
    </div>
    
    <div class = "row">
      <div class="col m10 offset-m1 s12">
        <h5 class = "center-align">Cilindros (cél/cp 200x)</h5>
      </div>
    </div>

    <div class = "row">
      <div class="input-field col s2">
        <label for = 'cilindros_hialinos'>Hialinos</label>
        <?php echo form_input('cilindros_hialinos', $exame->cilindros_hialinos, 'class = "validate" disabled') ?>
      </div>
      <div class="input-field col s2">
        <label for = 'cilindros_granulosos'>Granulosos</label>
        <?php echo form_input('cilindros_granulosos', $exame->cilindros_granulosos, 'class = "validate" disabled') ?>
      </div>
      <div class="input-field col s2">
        <label for = 'cilindros_celulares'>Celulares</label>
        <?php echo form_input('cilindros_celulares', $exame->cilindros_celulares, 'class = "validate" disabled') ?>
      </div>
      <div class="input-field col s2"> 
        <label for = 'cilindros_cereos'>Cereos</label>
        <?php echo form_input('cilindros_cereos', $exame->cilindros_cereos, 'class = "validate" disabled') ?>      
      </div>
      <div class="input-field col s2"> 
        <label for = 'cilindros_mistos'>Mistos</label>
        <?php echo form_input('cilindros_mistos', $exame->cilindros_mistos, 'class = "validate" disabled') ?>      
      </div>
    </div>



    <div class="row">
      <div class="input-field col s12">
        <label for = "bacterias">Bact&eacute;rias</label>
        <?php echo form_textarea('bacterias',$exame->bacterias, 'class = "materialize-textarea" disabled') ?>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label for = "cristais">Cristais</label>
        <?php echo form_textarea('cristais',$exame->cristais, 'class = "materialize-textarea" disabled') ?>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label for = "outros">Outros</label>
        <?php echo form_textarea('outros',$exame->outros, 'class = "materialize-textarea" disabled') ?>
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
</div>

<script type="text/javascript">  
$(document).ready(function() {
  $('select').material_select();
});
</script>
<?php $this->load->view('includes/footer'); ?>
  