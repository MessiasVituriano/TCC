<?php
$this->load->view('includes/header.php');
$this->load->view('includes/nav.php');
?>
  
  <div class="container">
      <div class="row z-depth-2">
        <div class="col m10 offset-m1 s12">
      <div class="row">
      <div class="row">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Identifi&ccedil;&atilde;o do animal</h4>
      </div>

  <?php foreach ($consultas as $consulta): ?>
      <div class="row">
        <div class="input-field col s2">
          <label for = "id_consulta">ID consulta</label>
          <?php echo form_input('id_consulta', $consulta->id_consulta, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s8">
          <label for = "nomeAnimal">Nome animal</label>
          <?php echo form_input('nomeAnimal', $consulta->nomeAnimal, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s2">
          <label for = "idade">Idade</label>
          <?php echo form_input('idade', $consulta->idade, 'class = "validate" disabled') ?>
        </div>
        </div>      
      </div>
      <div class="row">
          <?php if($consulta->especie == "C"){ ?>        
          <div class="input-field col s2">
            <label for = "especie">Especie</label>
            <?php echo form_input('especie', "Cao", 'class = "validate" disabled') ?>
          </div>
          <?php }else{?>
            <div class="input-field col s2">
            <label for = "especie">Especie</label>
            <?php echo form_input('especie', "Gato", 'class = "validate" disabled') ?>
          </div>  
          <?php } ?>
          <div class="input-field col s2">
            <label for="raca">Ra&ccedil;a</label>
            <?php echo form_input('raca', $consulta->raca, 'class = "validate" disabled') ?>
          </div>      
          <div class="input-field col s4">
            <label for="pelagem">Pelagem</label>
            <?php echo form_input('pelagem', $consulta->pelagem, 'class = "validate" disabled') ?>
        </div>
        <?php if($consulta->sexo == "M"){ ?>        
          <div class="input-field col s2">
            <label for = "sexo">Sexo</label>
            <?php echo form_input('Sexo', "Macho", 'class = "validate" disabled') ?>
          </div>
          <?php }else{?>
            <div class="input-field col s2">
            <label for = "sexo">Sexo</label>
            <?php echo form_input('sexo', "Femea", 'class = "validate" disabled') ?>
          </div>  
          <?php } ?>  
          <div class="input-field col s2">
            <label for="peso">Peso(Kg)</label>
            <?php echo form_input('peso', $consulta->peso, 'class = "validate" disabled') ?>
          </div>      
      </div>

      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Identifi&ccedil;&atilde;o do propriet&aacute;rio</h4>
      </div>
      <div class="row">
        <div class="input-field col s9">
          <label for="nomeProp">Nome do propriet&aacute;rio</label>
          <?php echo form_input('nomeProp', $consulta->nomeProp, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s3">
          <label for="cpf">CPF</label>
          <?php echo form_input('cpf', $consulta->cpf, 'class = "validate" disabled') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <label for="logradouro">Logradouro</label>
          <?php echo form_input('logradouro', $consulta->logradouro, 'class = "validate" disabled') ?>
       </div>
        <div class="input-field col s2">
          <label for="numero">Numero</label>
          <?php echo form_input('numero', $consulta->numero, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s3">
          <label for="bairro">Bairro</label>
          <?php echo form_input('bairro', $consulta->bairro, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s3">
          <label for="cidade">Cidade</label>
          <?php echo form_input('cidade', $consulta->cidade, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s1">
          <label for="estado">Estado</label>
          <?php echo form_input('estado', $consulta->estado, 'class = "validate" disabled') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <label for="telefone">Telefone</label>
          <?php echo form_input('telefone', $consulta->telefone, 'class = "validate" disabled') ?>
          </div>
        <div class="input-field col s6">
          <label for="celular">Celular</label>
          <?php echo form_input('celular', $consulta->celular, 'class = "validate" disabled') ?>
        </div>
      </div>
      <div class="row"> 
        <div class="input-field col s12">
          <label for="queixa">Queixa principal</label>        
          <?php echo form_textarea('queixa', $consulta->queixa, 'class = "materialize-textarea" disabled') ?>
        </div>
      </div>
      
      <?php if(isset($consulta->vacinacoes)): ?>
      <div class="row">
        <div class="input-field col s12"> 
          <label for="vacinacoes">Vacina&ccedil;&otilde;es</label>        
          <?php echo form_textarea('vacinacoes', $consulta->vacinacoes, 'class = "materialize-textarea" disabled') ?>
          <?php echo form_error('vacinacoes') ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if(isset($consulta->vermifugacao)): ?>
      <div class="row">
        <div class="input-field col s12"> 
          <label for="vermifugacao">Vermifuga&ccedil;&atilde;o</label>        
          <?php echo form_textarea('vermifugacao', $consulta->vermifugacao, 'class = "materialize-textarea" disabled') ?>
          <?php echo form_error('vermifugacao') ?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if(isset($consulta->ectoparasitos)): ?>
        <label for="ect">Ectoparasitos</label>
          <?php echo form_input('ect', $consulta->ectoparasitos, 'class = "validate" disabled') ?>
        </div>  
      <?php endif; ?>

      <?php if(isset($consulta->ambiente)): ?>
        <div class="row">
        <div class="input-field col s12">
          <label for="ambiente">Ambiente</label>        
          <?php echo form_input('ambiente', $consulta->ambiente, 'class = "validate" disabled') ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if(isset($consulta->ectoparasitos)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="contactantes">Contactantes</label>        
          <?php echo form_input('contactantes', $consulta->contactantes, 'class = "validate" disabled') ?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if(isset($consulta->ectoparasitos)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="alimentacao">Alimenta&ccedil;&atilde;o</label>        
          <?php echo form_input('alimentacao', $consulta->alimentacao, 'class = "validate" disabled') ?>
        </div>
      </div>
      <?php endif; ?>
      
      <div class="row">
        <div class="input-field col s12">
          <label for="medicamento">Medicamento</label>
          <?php echo form_input('medicamento', $consulta->medicamento, 'class = "validate" disabled') ?>
        </div>
      </div>
      
      <?php if(isset($consulta->ectoparasitos)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="doencas_anteriores">Doen&ccedil;as anteriores</label>        
          <?php echo form_input('doencas_anteriores', $consulta->doencas_anteriores, 'class = "validate" disabled') ?>
        </div>
      </div>
      <?php endif; ?>
      
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Exame F&iacute;sico</h4>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <label for="temperatura">Temperatura(°C)</label>        
          <?php echo form_input('temperatura', $consulta->temperatura, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s4">
          <label for="freq_card">Frequ&ecirc;ncia card&iacute;aca(btm)</label>        
          <?php echo form_input('freq_card', $consulta->freq_card, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s4">
          <label for="freq_resp">Frequ&ecirc;ncia respirat&oacute;ria(mvm)</label>        
          <?php echo form_input('freq_resp', $consulta->freq_resp, 'class = "validate" disabled') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
            <label for="hidratacao">Hidrata&ccedil;&atilde;o</label>        
            <?php if($consulta->hidratacao == "S"){ ?>
              <?php echo form_input('hidratacao', 'Hidratado', 'class = "validate" disabled') ?>
            <?php }else{ ?>
              <?php echo form_input('hidratacao', 'Nao hidratado', 'class = "validate" disabled') ?>
            <?php } ?>
        </div>
        <div class="input-field col s4">
          <label for="linfonodos">Linfonodos</label>        
          <?php echo form_input('linfonodos', $consulta->linfonodos, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s4">
          <label for="tpc">TPC</label>        
          <?php echo form_input('tpc', $consulta->tpc, 'class = "validate" disabled') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <label for="mucosas">Mucosas</label>        
          <?php echo form_input('mucosas', $consulta->mucosas, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s4">
          <label for="pele">Pele</label>        
          <?php echo form_input('pele', $consulta->pele, 'class = "validate" disabled') ?>
        </div>
        <div class="input-field col s4">
          <label for="pelos">P&ecirc;los</label>        
          <?php echo form_input('pelos', $consulta->pelos, 'class = "validate" disabled') ?>
        </div>
      </div>
      <div class = "row">
        <div class = "input-field col s12">
          <label for = "estado_geral"> Estado geral</label>
          <?php echo form_input('estado_geral', $consulta->estado_geral, 'class = "validate" disabled') ?>
        </div>
      </div>
      <?php if(isset($consulta->cabeca)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="cabeca">Cabe&ccedil;a (olhos, ouvidos, cavidade bucal, narinas e dentes)</label>        
          <?php echo form_textarea('cabeca', $consulta->cabeca, 'class = "materialize-textarea" disabled') ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if(isset($consulta->sist_resp)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_resp">Sistema respirat&oacute;rio</label>        
          <?php echo form_textarea('sist_resp', $consulta->sist_resp, 'class = "materialize-textarea" disabled') ?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if(isset($consulta->sist_circ)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_circ">Sistema circulat&oacute;rio</label>        
          <?php echo form_textarea('sist_circ', $consulta->sist_circ, 'class = "materialize-textarea" disabled') ?>
          </div>
      </div>
      <?php endif; ?>
      
      
      <?php if(isset($consulta->sist_dige)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_dige">Sistema digestivo</label>        
          <?php echo form_textarea('sist_dige', $consulta->sist_dige, 'class = "materialize-textarea" disabled') ?>
        </div>
      </div>
      <?php endif; ?>
      

      <?php if(isset($consulta->sist_geto)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_geto">Sistema getourin&aacute;rio</label>        
          <?php echo form_textarea('sist_geto', $consulta->sist_geto, 'class = "materialize-textarea" disabled') ?>
          <?php echo form_error('sist_geto') ?>
        </div>
      </div>
      <?php endif; ?>


      <?php if(isset($consulta->sist_neur)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_neur">Sistema neurol&oacute;gico</label>        
          <?php echo form_textarea('sist_neur', $consulta->sist_neur, 'class = "materialize-textarea" disabled') ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if(isset($consulta->sist_loco)): ?>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_loco">Sistema locomotor</label>        
          <?php echo form_textarea('sist_loco', $consulta->sist_loco, 'class = "materialize-textarea" disabled') ?>
        </div>
      </div>
      <?php endif; ?>

      <div class = "row">
        <div class = "input-field col s12">
          <label for = "diagnostico">Diagn&oacute;stico/Suspeita</label>
          <?php echo form_textarea('diagnostico', $consulta->diagnostico, 'class = "materialize-textarea" disabled') ?>
        </div>
      </div>
      <div class = "row">
      
      <?php if(isset($consulta->terapia_real)): ?>
        <div class = "input-field col s6">
          <label for = "terapia_real">Terapia realizada(no consult&oacute;rio)</label>
          <?php echo form_textarea('terapia_real', $consulta->terapia_real, 'class = "materialize-textarea" disabled') ?>
        </div>
      <?php endif; ?>
      <?php if(isset($consulta->terapia_pres)): ?>
        <div class = "input-field col s6">
          <label for = "terapia_pres">Terapia prescrita</label>
          <?php echo form_textarea('terapia_pres', $consulta->terapia_pres, 'class = "materialize-textarea" disabled') ?>
        </div>
      <?php endif; ?>
      </div>

      <div class = "row">
         <div class = "center-align col s3">
        <?php if ($consulta->dermatologico == 'R'):?>
            <a class="waves-effect waves-light btn" href=<?php echo base_url().'consulta/visualizarDermatologico/'.$consulta->id_consulta;?>>Dermatologico
            </a>
        <?php endif; ?>
        </div>
      </div>

      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
document.getElementById('ect').onchange = function() {
    document.getElementById('ectoparasitos').disabled = !this.checked;
};
</script>

<script type="text/javascript"> 
      jQuery.noConflict();
      jQuery(function($){
         $("#CPF").mask("999.999.999-99");
         $("#celular").mask("(99) 99999-9999");
         $("#telefone").mask("(99) 9999-9999");
    });
</script> 
<?php $this->load->view('includes/footer.php');?>


