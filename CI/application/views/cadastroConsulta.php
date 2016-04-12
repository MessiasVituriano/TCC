<?php
$this->load->view('includes/header.php');
?>
  <div class = "navbar-fixed">  
  <nav>
  <div class="nav-wrapper blue" >
      <a href="#" class="brand-logo center">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><?php if(isset($mensagem)) echo  'Bem vindo:  '.$mensagem." "; ?></li>
          <li><a href=<?php echo base_url().'usuario/logout/'?>>Sair</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li><?php if(isset($mensagem)) echo  'Bem vindo:  '.$mensagem." "; ?></li>
          <li><a href=<?php echo base_url().'usuario/logout/'?>>Sair</a></li>
      </ul>
    </div>
  </nav>
  </div>
  
  <div class="container">
      <div class="row z-depth-2">
        <div class="col m10 offset-m1 s12">
        <h1 class="center-align ">Formul&aacute;rio de inscri&ccedil;&atilde;o</h1>
      <div class="row">
      <div class="row">
	  <?php echo form_open('consulta/cadastro'); ?>
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Identifi&ccedil;&atilde;o do animal</h4>
      </div>
      <div class="row">
        <div class="input-field col s9">
          <label for="nomeAnimal">Nome do animal</label>
          <?php echo form_input('nomeAnimal', '', 'class = "validate"') ?>
          <?php echo form_error('nomeAnimal') ?>
        </div>
        <div class="input-field col s3">
          <label for="idade">Idade(Anos)</label>
          <?php echo form_input('idade', '', 'class = "validate"') ?>
          <?php echo form_error('idade') ?>
        </div>      
      </div>
      <div class="row">
        <div class="input-field col s6">
            <input name = "especie" type="radio" id="C" value = "C" />
            <label for="C">C&atilde;o</label>
            <input name = "especie" type="radio" id="G" value = "G"/>
            <label for="G">Gato</label>
        </div>
        <div class="input-field col s6">
          <label for="raca">Ra&ccedil;a</label>
          <?php echo form_input('raca', '', 'class = "validate"') ?>
          <?php echo form_error('raca') ?>
        </div>      
      </div>
      <div class="row">
        <div class="input-field col s4">
          <label for="pelagem">Pelagem</label>
          <?php echo form_input('pelagem', '', 'class = "validate"') ?>
          <?php echo form_error('pelagem') ?>
        </div>
        <div class="input-field col s4">
            <input name = "sexo" type="radio" id="M" value = "M" />
            <label for="M">Macho</label>
            <input name = "sexo" type="radio" id="F" value = "F"/>
            <label for="F">F&ecirc;mea</label>
        </div>
        <div class="input-field col s4">
          <label for="peso">Peso(Kg)</label>
          <?php echo form_input('peso', '', 'class = "validate"') ?>
          <?php echo form_error('peso') ?>
        </div>      
      </div>
      <div class="col m10 offset-m1 s12">
      <h4 class = "center-align"> Identifi&ccedil;&atilde;o do propriet&aacute;rio</h4>
      </div>
      <div class="row">
        <div class="input-field col s9">
          <label for="nomeProp">Nome do propriet&aacute;rio</label>
          <?php echo form_input('nomeProp', '', 'class = "validate"') ?>
          <?php echo form_error('nomeProp') ?>
        </div>
        <div class="input-field col s3">
          <label for="cpf">CPF</label>
          <?php echo form_input('cpf', '', 'class = "validate"') ?>
          <?php echo form_error('cpf') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <label for="logradouro">Logradouro</label>
          <?php echo form_input('logradouro', '', 'class = "validate"') ?>
          <?php echo form_error('logradouro') ?>
       </div>
        <div class="input-field col s2">
          <label for="numero">Numero</label>
          <?php echo form_input('numero', '', 'class = "validate"') ?>
          <?php echo form_error('numero') ?>
        </div>
        <div class="input-field col s3">
          <label for="bairro">Bairro</label>
          <?php echo form_input('bairro', '', 'class = "validate"') ?>
          <?php echo form_error('bairro') ?>
        </div>
        <div class="input-field col s3">
          <label for="cidade">Cidade</label>
          <?php echo form_input('cidade', '', 'class = "validate"') ?>
          <?php echo form_error('cidade') ?>
        </div>
        <div class="input-field col s1">
          <label for="estado">Estado</label>
          <?php echo form_input('estado', '', 'class = "validate"') ?>
          <?php echo form_error('estado') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <label for="telefone">Telefone</label>
          <?php echo form_input('telefone', '', 'class = "validate"') ?>
          <?php echo form_error('telefone') ?>
        </div>
        <div class="input-field col s6">
          <label for="celular">Celular</label>
          <?php echo form_input('celular', '', 'class = "validate"') ?>
          <?php echo form_error('celular') ?>
        </div>
      </div>
      <div class="row"> 
        <div class="input-field col s12">
          <label for="queixa">Queixa principal</label>        
          <?php echo form_textarea('queixa', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('queixa') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12"> 
          <label for="vacinacoes">Vacina&ccedil;&otilde;es</label>        
          <?php echo form_textarea('vacinacoes', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('vacinacoes') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">          
          <label for="vermifugacao">Vermifuga&ccedil;&atilde;o</label>        
          <?php echo form_textarea('vermifugacao', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('vermifugacao') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <input type="checkbox" id="ect" name = "ect"/>
          <label for = "ect">Ectoparasitos</label>        
        </div>
        <div class="input-field col s9">
          <input type="text" id="ectoparasitos" name = "ectoparasitos" disabled />
          <label for = "ectoparasitos">Quais?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="ambiente">Ambiente</label>        
          <?php echo form_input('ambiente', '', 'class = "validate"') ?>
          <?php echo form_error('ambiente') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="contactantes">Contactantes</label>        
          <?php echo form_input('contactantes', '', 'class = "validate"') ?>
          <?php echo form_error('contactantes') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="alimentacao">Alimenta&ccedil;&atilde;o</label>        
          <?php echo form_input('alimentacao', '', 'class = "validate"') ?>
          <?php echo form_error('alimentacao') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="medicamento">Medicamento</label>
          <?php echo form_input('medicamento', '', 'class = "validate"') ?>
          <?php echo form_error('medicamento') ?>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="doencas_anteriores">Doen&ccedil;as anteriores</label>        
          <?php echo form_input('doencas_anteriores', '', 'class = "validate"') ?>
          <?php echo form_error('doencas_anteriores') ?>
        </div>
      </div>
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Exame F&iacute;sico</h4>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <label for="temperatura">Temperatura(°C)</label>        
          <?php echo form_input('temperatura', '', 'class = "validate"') ?>
          <?php echo form_error('temperatura') ?>
        </div>
        <div class="input-field col s4">
          <label for="freq_card">Frequ&ecirc;ncia card&iacute;aca(btm)</label>        
          <?php echo form_input('freq_card', '', 'class = "validate"') ?>
          <?php echo form_error('freq_card') ?>
        </div>
        <div class="input-field col s4">
          <label for="freq_resp">Frequ&ecirc;ncia respirat&oacute;ria(mvm)</label>        
          <?php echo form_input('freq_resp', '', 'class = "validate"') ?>
          <?php echo form_error('freq_resp') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
            <input name = "hidratacao" type="radio" id="S" value = "S" />
            <label for="S">Hidratado</label>
            <input name = "hidratacao" type="radio" id="N" value = "N"/>
            <label for="N">N&atilde;o hidratado</label>
        </div>
        <div class="input-field col s4">
          <label for="linfonodos">Linfonodos</label>        
          <?php echo form_input('linfonodos', '', 'class = "validate"') ?>
          <?php echo form_error('linfonodos') ?>
        </div>
        <div class="input-field col s4">
          <label for="tpc">TPC</label>        
          <?php echo form_input('tpc', '', 'class = "validate"') ?>
          <?php echo form_error('tpc') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <label for="mucosas">Mucosas</label>        
          <?php echo form_input('mucosas', '', 'class = "validate"') ?>
          <?php echo form_error('mucosas') ?>
        </div>
        <div class="input-field col s4">
          <label for="pele">Pele</label>        
          <?php echo form_input('pele', '', 'class = "validate"') ?>
          <?php echo form_error('pele') ?>
        </div>
        <div class="input-field col s4">
          <label for="pelos">P&ecirc;los</label>        
          <?php echo form_input('pelos', '', 'class = "validate"') ?>
          <?php echo form_error('pelos') ?>
        </div>
      </div>
      <div class = "row">
        <div class = "input-field col s12">
          <label for = "estado_geral"> Estado geral</label>
          <?php echo form_input('estado_geral', '', 'class = "validate"') ?>
          <?php echo form_error('estado_geral') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="cabeca">Cabe&ccedil;a (olhos, ouvidos, cavidade bucal, narinas e dentes)</label>        
          <?php echo form_textarea('cabeca', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('cabeca') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_resp">Sistema respirat&oacute;rio</label>        
          <?php echo form_textarea('sist_resp', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('sist_resp') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_circ">Sistema circulat&oacute;rio</label>        
          <?php echo form_textarea('sist_circ', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('sist_circ') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_dige">Sistema digestivo</label>        
          <?php echo form_textarea('sist_dige', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('sist_dige') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_geto">Sistema getourin&aacute;rio</label>        
          <?php echo form_textarea('sist_geto', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('sist_geto') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_neur">Sistema neurol&oacute;gico</label>        
          <?php echo form_textarea('sist_neur', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('sist_neur') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="sist_loco">Sistema locomotor</label>        
          <?php echo form_textarea('sist_loco', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('sist_loco') ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <input type="checkbox" id="hemograma" name = "hemograma" value = "S"/>
          <label for = "hemograma">An&aacute;lises cl&iacute;nicas</label>  
        </div>
        <div class="input-field col s3">
          <input type="checkbox" id="cavitario" name = "cavitario" value = "S"/>
          <label for = "cavitario">Cavit&aacute;rio</label>  
        </div>
        <div class="input-field col s3">
          <input type="checkbox" id="urinalise" name = "urinalise" value = "S"/>
          <label for = "urinalise">Urina</label>  
        </div>
        <div class="input-field col s3">
          <input type="checkbox" id="bioquimico" name = "bioquimico" value = "S"/>
          <label for = "bioquimico">Bioquimico</label>  
        </div>
      </div>
      <div class = "row">
        <div class = "input-field col s12">
          <label for = "diagnostico">Diagn&oacute;stico/Suspeita</label>
          <?php echo form_textarea('diagnostico', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('diagnostico') ?>
        </div>
      </div>
      <div class = "row">
        <div class = "input-field col s6">
          <label for = "terapia_real">Terapia realizada(no consult&oacute;rio)</label>
          <?php echo form_textarea('terapia_real', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('terapia_real') ?>
        </div>
        <div class = "input-field col s6">
          <label for = "terapia_pres">Terapia prescrita</label>
          <?php echo form_textarea('terapia_pres', '', 'class = "materialize-textarea"') ?>
          <?php echo form_error('terapia_pres') ?>
        </div>
      </div>
      <div class = "row">
       <div class = "center-align col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
            <i class="material-icons right">done</i>
          </button>
        </div>
      </div>  
      <?php echo form_close(); ?>
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
        $(document).ready(function() {
        $('select').material_select();
        });
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


