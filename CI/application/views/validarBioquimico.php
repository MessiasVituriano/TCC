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


<?php foreach ($exames as $exame):?>
  
<div class = "row">
  <div class="input-field col s12">      
  <label for = 'data_exame'>Data: </label>
  <?php $data = strtotime($exame->data_exame); ?>
  <?php echo form_input('data_exame', date("d-m-Y",$data), 'disabled')?>
  </div>
</div>

<div class="row">
  <div class="input-field col s3">  
    <label for = 'ureia_serica'>Ur&eacute;ia S&eacute;rica (mg/dL)</label>
    <?php echo form_input('ureia_serica', $exame->ureia_serica, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'creatina_serica'>Creatinina S&eacute;rica (mg/dL)</label>
    <?php echo form_input('creatina_serica', $exame->creatina_serica, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'alt_tpg'>ALT/TGP (U/mL)</label>
    <?php echo form_input('alt_tpg', $exame->alt_tpg, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'ast_tgo'>AST/TGO (U/mL)</label>
    <?php echo form_input('ast_tgo', $exame->ast_tgo, 'class="validate" disabled') ?>
  </div>
</div>


<div class="row">
  <div class="input-field col s3">  
    <label for = 'fostofase_alcalina'>Fosfatase Alcalina (U/L)</label>
    <?php echo form_input('fostofase_alcalina', $exame->fostofase_alcalina, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'lipase'>Lipase (U/L)</label>
    <?php echo form_input('lipase', $exame->lipase, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'amilase'>Amilase (U/L)</label>
    <?php echo form_input('amilase', $exame->amilase, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'glicose'>Glicose</label>
    <?php echo form_input('glicose', $exame->glicose, 'class="validate" disabled') ?>
  </div>
</div>


<div class="row">
  <div class="input-field col s4">  
    <label for = 'colesterol_total'>Colesterol Total (MG/dL)</label>
    <?php echo form_input('colesterol_total', $exame->colesterol_total, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'triglicerideos'>Triglicer&iacute;deos (mg/DL)</label>
    <?php echo form_input('triglicerideos', $exame->triglicerideos, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'albumina'>Albumina (g/dL)</label>
    <?php echo form_input('albumina', $exame->albumina, 'class="validate" disabled') ?>
  </div>
</div>

      <div class="col m10 offset-m1 s12">
        <h5 class = "center-align">Bilirrubina</h5>
      </div>


<div class="row">
  <div class="input-field col s4">  
    <label for = 'bilirrubina_total'>Total</label>
    <?php echo form_input('bilirrubina_total', $exame->bilirrubina_total, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'bilirrubina_direta'>Direta</label>
    <?php echo form_input('bilirrubina_direta', $exame->bilirrubina_direta, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s4">  
    <label for = 'bilirrubina_indireta'>Indireta</label>
    <?php echo form_input('bilirrubina_indireta', $exame->bilirrubina_indireta, 'class="validate" disabled') ?>
  </div>
</div>

<div class="row">
  <div class="input-field col s3">  
    <label for = 'gama_gt'>Gama GT (U/L)</label>
    <?php echo form_input('gama_gt', $exame->gama_gt, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'calcio'>C&aacute;lcio (mg/dL)</label>
    <?php echo form_input('calcio', $exame->calcio, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'fosforo'>F&oacute;sforo (mg/dL)</label>
    <?php echo form_input('fosforo', $exame->fosforo, 'class="validate" disabled') ?>
  </div>
  <div class="input-field col s3">  
    <label for = 'potassio'>Pot&aacute;ssio (K+)</label>
    <?php echo form_input('potassio', $exame->potassio, 'class="validate" disabled') ?>
  </div>
</div>

<div class = "row">
  <div class = "input-field col s6">
    <label for = "caracteristica">Caracteristica da amostra</label>
    <?php switch ($exame->caracteristica) {
      case 'N':
        echo form_input('caracteristica', 'Normal', 'class="validate" disabled'); 
        break;
      case 'I':
        echo form_input('caracteristica', 'Ictirica', 'class="validate" disabled');         
        break;
      case 'H':
        echo form_input('caracteristica', 'Hemilisada', 'class="validate" disabled');         
        break;
      case 'L':
        echo form_input('caracteristica', 'Lipimica', 'class="validate" disabled'); 
        break;
    } ?>
  </div>
  <div class = "input-field col s6">
    <label for = 'teste'>Teste</label>
    <?php if($exame->teste == 'R'){
        echo form_input('teste', 'Repetido e confirmado', 'class="validate" disabled'); 
      }else
        echo form_input('teste', 'Nao realizado', 'class="validate" disabled'); 
      ?>
  </div>
</div>

<div class="row">
  <div class="input-field col s12">
    <label for = "outros">Outros</label>
    <?php echo form_textarea('outros',$exame->outros, 'class = "materialize-textarea" disabled') ?>
  </div>
</div>
<?php endforeach; ?>

  <?php echo form_open('validar/bioquimico/'.$this->uri->segment(3)); ?>
  <div class = "row">
   <div class = "center-align col s6">
      <button class="blue btn waves-effect waves-light" name = "validar" value = "sim">Validar</button>
    </div>
   <div class = "center-align col s6">
      <button class="red btn waves-effect waves-light" name = "validar" value = "nao">N&atilde;o validar</button>
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

