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

        <?php echo form_open('exame/urinalise/'.$this->uri->segment(3)); ?>

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
          <?php $today = date("d/m/y");?>
          <?php echo form_input('data_exame', $today, 'disabled')?>
        </div>
      </div>
      <div class = "row">
       <div class="input-field col s12">
        <select name = 'metodo'>
          <option value="" disabled selected>M&eacute;todo de colheita</option>
          <option value="Miccao espontanea">Mic&ccedil;&atilde;o espont&acirc;nea</option>
          <option value="Cateterismo">Cateterismo</option>
          <option value="Cistocentese">Cistocentese</option>
        </select>
        <?php echo form_error('metodo'); ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s3">  
        <label for = 'volume'>Volume</label>
        <?php echo form_input('volume', '', 'class="validate"') ?>
        <?php echo form_error('volume'); ?>
      </div>
      <div class="input-field col s3">  
        <label for = 'densidade'>Densidade</label>
        <?php echo form_input('densidade', '', 'class="validate"') ?>
        <?php echo form_error('densidade'); ?>
      </div>
      <div class="input-field col s3">  
        <select name = 'cor' >
          <option value="" disabled selected>Cor</option>
          <option value="Amarelo claro">Amarelo claro/P&aacute;lido</option>
          <option value="Amarelo escuro">Amarelo escuro/P&aacute;lido</option>
          <option value="Alaranjado">&Acirc;mbar a amarelo esverdeado</option>
          <option value="Marron">Marron</option>
          <option value="Azul">Azul esverdeado</option>
        </select>
        <?php echo form_error('cor'); ?>
      </div>
      <div class="input-field col s3">
        <select name = 'odor' >
          <option value="" disabled selected>Odor</option>
          <option value="Sus genesis">Sus genesis</option>
          <option value="Putrido">P&uacute;trido</option>
          <option value="Adocicado">Adocicado</option>
          <option value="Amoniacal">Amoniacal</option>
        </select>
        <?php echo form_error('odor'); ?>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s3">
        <select name = 'corpos_cetonicos'>
          <option value="" disabled selected>Corpos cet&ocirc;nicos</option>
          <option value="-">-</option>
          <option value="+">+</option>
          <option value="++">++</option>
          <option value="+++">+++</option>
        </select>
        <?php echo form_error('corpos_cetonicos'); ?>
      </div>
    </div>


    <div class="row">
      <div class="input-field col s3">
        <label for="aspecto">Aspecto</label>
      </div>
      <div class="input-field col s3">
        <input name = "aspecto" type="radio" id="L" value = "Limpido"/>
        <label for="L">L&iacute;mpido</label>
      </div>
      <div class="input-field col s3">
        <input name = "aspecto" type="radio" id="LT" value = "Levemente turva"/>
        <label for="LT">Levemente turva</label>
      </div>
      <div class="input-field col s3">
        <input name = "aspecto" type="radio" id="T" value = "Turva"/>
        <label for="T">Turva</label>
      </div>
    </div>
    <?php echo form_error('aspecto'); ?>

    <div class="row">
      <div class="input-field col s3">
        <label for="coagulacao">Coagula&ccedil;ao</label>
      </div>
      <div class="input-field col s3">
        <input name = "coagulacao" type="radio" id="P" value = "P"/>
        <label for="P">Presen&ccedil;a</label>
      </div>
      <div class="input-field col s3">
        <input name = "coagulacao" type="radio" id="A" value = "A"/>
        <label for="A">Aus&ecirc;ncia</label>
      </div>
      <?php echo form_error('coagulacao'); ?>
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
    <div class="input-field col s4">
      <label for="sangue_oculto">Sangue oculto</label>
    </div>
    <div class="input-field col s4">
      <input name = "sangue_oculto" type="radio" id="N" value = "Negativo"/>
      <label for="N">Negativo</label>
    </div>
    <div class="input-field col s4">
      <input name = "sangue_oculto" type="radio" id="P" value = "Negativo"/>
      <label for="P">Positivo</label>
    </div>
    <?php echo form_error('sangue_oculto'); ?>
  </div>
  

  <div class = "row">
    <div class="input-field col s4">
      <label for = 'hemacias'>Hem&aacute;cias (cél/cp 400x)</label>
      <?php echo form_input('hemacias') ?>
      <?php echo form_error('hemacias'); ?>
    </div>
    <div class="input-field col s4">
      <label for = 'urobilinogenio'>Urobilinogenio</label>
      <?php echo form_input('urobilinogenio') ?>
      <?php echo form_error('urobilinogenio'); ?>
    </div>
    <div class="input-field col s4"> 
      <label for = 'leocitos'>Leocitos (cél/cp 400x)</label>
      <?php echo form_input('leocitos') ?> 
      <?php echo form_error('leocitos'); ?>
    </div>
  </div>

  <div class = "row">
    <div class="col m10 offset-m1 s12">
      <h5 class = "center-align">Celulas epiteliais (cél/cp 400x)</h5>
    </div>
    
    <div class = "row">
      <div class="input-field col s3">
        <label for = 'ce_renais'>Renais</label>
        <?php echo form_input('ce_renais') ?>
        <?php echo form_error('ce_renais'); ?>
      </div>
      <div class="input-field col s3">
        <label for = 'ce_pelve'>Pelve</label>
        <?php echo form_input('ce_pelve') ?>
        <?php echo form_error('ce_pelve'); ?>
      </div>
      <div class="input-field col s3">
        <label for = 'ce_versicais'>Versicais</label>
        <?php echo form_input('ce_versicais') ?>
        <?php echo form_error('ce_versicais'); ?>
      </div>
      <div class="input-field col s3"> 
        <label for = 'ce_uretrais'>Uretrais</label>
        <?php echo form_input('ce_uretrais') ?>      
        <?php echo form_error('ce_uretrais'); ?>
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
        <?php echo form_input('cilindros_hialinos') ?>
        <?php echo form_error('cilindros_hialinos'); ?>
      </div>
      <div class="input-field col s2">
        <label for = 'cilindros_granulosos'>Granulosos</label>
        <?php echo form_input('cilindros_granulosos') ?>
        <?php echo form_error('cilindros_granulosos'); ?>
      </div>
      <div class="input-field col s2">
        <label for = 'cilindros_celulares'>Celulares</label>
        <?php echo form_input('cilindros_celulares') ?>
        <?php echo form_error('cilindros_celulares'); ?>
      </div>
      <div class="input-field col s2"> 
        <label for = 'cilindros_cereos'>Cereos</label>
        <?php echo form_input('cilindros_cereos') ?>      
        <?php echo form_error('cilindros_cereos'); ?>
      </div>
      <div class="input-field col s2"> 
        <label for = 'cilindros_mistos'>Mistos</label>
        <?php echo form_input('cilindros_mistos') ?>      
        <?php echo form_error('cilindros_mistos'); ?>
      </div>
    </div>



    <div class="row">
      <div class="input-field col s12">
        <label for = "bacterias">Bact&eacute;rias</label>
        <?php echo form_textarea('bacterias','', 'class = "materialize-textarea"') ?>
        <?php echo form_error('bacterias'); ?>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label for = "cristais">Cristais</label>
        <?php echo form_textarea('cristais','', 'class = "materialize-textarea"') ?>
        <?php echo form_error('cristais'); ?>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label for = "outros">Outros</label>
        <?php echo form_textarea('outros','', 'class = "materialize-textarea"') ?>
        <?php echo form_error('outros'); ?>
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
      <button class="btn waves-effect waves-light" type="submit">Realizar exame cavit&aacute;rio
        <i class="material-icons">done</i>
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
