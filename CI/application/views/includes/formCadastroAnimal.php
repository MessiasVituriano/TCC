  <div class="container">
      <div class="row z-depth-2">
        <div class="col m10 offset-m1 s12">
        <h1 class="center-align ">Formul&aacute;rio de inscri&ccedil;&atilde;o</h1>
      <div class="row">
      <div class="row">
    <form class="col s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Identifi&ccedil;&atilde;o do animal</h4>
      </div>
      <div class="row">
        <div class="input-field col s9">
          <input id="nomeAnimal" type="text" class="validate" required>
          <label for="first_name">Nome do animal</label>
        </div>
        <div class="input-field col s3">
          <input name = "idade" id="idade" type="number" min = "0" class="validate" required>
          <label for="idade">Idade(Anos)</label>
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
          <input name = "raca" id="raca" type="text" class="validate required">
          <label for="raca">Ra&ccedil;a</label>
        </div>      
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input name = "pelagem" id="pelagem" type="text" class="validate">
          <label for="pelagem">Pelagem</label>
        </div>
        <div class="input-field col s4">
            <input name = "sex" type="radio" id="M" value = "M" />
            <label for="M">Macho</label>
            <input name = "sex" type="radio" id="F" value = "F"/>
            <label for="F">F&ecirc;mea</label>
        </div>
        <div class="input-field col s4">
          <input name = "peso" id="peso" type="number" class="validate" required>
          <label for="peso">Peso(Kg)</label>
        </div>      
      </div>
      <div class="col m10 offset-m1 s12">
      <h4 class = "center-align"> Identifi&ccedil;&atilde;o do propriet&aacute;rio</h4>
      </div>
      <div class="row">
        <div class="input-field col s9">
          <input id="nomeProp" type="text" class="validate" required>
          <label for="nomeProp">Nome do propriet&aacute;rio</label>
        </div>
        <div class="input-field col s3">
          <input id="CPF" type="text" class="validate" required>
          <label for="CPF">CPF</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <input id="rua" type="text" class="validate">
          <label for="rua">Rua</label>
        </div>
        <div class="input-field col s3">
          <input id="bairro" type="text" class="validate">
          <label for="bairro">Bairro</label>
        </div>
        <div class="input-field col s3">
          <input id="cidade" type="text" class="validate">
          <label for="cidade">Cidade</label>
        </div>
        <div class="input-field col s3">
          <input id="estado" type="text" class="validate">
          <label for="estado">Estado</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="telefone" name="telefone" type="text" class="validate">
          <label for="telefone">Telefone</label>
        </div>
        <div class="input-field col s6">
          <input id="celular" name = "celular" type="text" class="validate">
          <label for="celular">Celular</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="queixa" class="materialize-textarea" required></textarea>
          <label for="queixa">Queixa principal</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12"> 
          <input type = "text" id="vacinas" class = "validate"></input>
          <label for="vacinas">Vacina&ccedil;&otilde;es</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">          
          <input type = "text" id="vermifugacao" class = "validate"></input>
          <label for="vermifugacao">Vermifuga&ccedil;&atilde;o</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <input type="checkbox" id="ectoparasitos"/>
          <label for = "ectoparasitos">Ectoparasitos</label>        
        </div>
        <div class="input-field col s3">
          <input type="text" id="ect" disabled />
          <label for = "ect">Quais?</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type = "text" id = "ambiente" class = "validate"></input>
          <label for="ambiente">Ambiente</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type = "text" id = "contactantes" class = "validate"></input>
          <label for="contactantes">Contactantes</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type = "text" id = "alimentacao" class = "validate"></input>
          <label for="alimentacao">Alimenta&ccedil;&atilde;o</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type = "text" id = "medicamento" class = "validate"></input>
          <label for="medicamento">Medicamento</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type = "text" id = "doenca" class = "validate"></input>
          <label for="doenca">Doen&ccedil;as anteriores</label>        
        </div>
      </div>
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Exame F&iacute;sico</h4>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input type = "number" min = "0" id = "temp" class = "validate" required></input>
          <label for="temp">Temperatura(°C)</label>        
        </div>
        <div class="input-field col s4">
          <input type = "number" min = "0" id = "freqC" class = "validate" required></input>
          <label for="freqC">Frequ&ecirc;ncia card&iacute;aca(btm)</label>        
        </div>
        <div class="input-field col s4">
          <input type = "number" min = "0" id = "freqR" class = "validate" required></input>
          <label for="freqR">Frequ&ecirc;ncia respirat&oacute;ria(mvm)</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
            <input name = "hid" type="radio" id="S" value = "S" />
            <label for="S">Hidratado</label>
            <input name = "hid" type="radio" id="N" value = "N"/>
            <label for="N">N&atilde;o hidratado</label>
        </div>
        <div class="input-field col s4">
          <input type = "text" id = "linfonodos" class = "validate"></input>
          <label for="linfonodos">Linfonodos</label>        
        </div>
        <div class="input-field col s4">
          <input type = "text" id = "tcp" class = "validate"></input>
          <label for="tcp">TCP</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input type = "text" id = "mucosas" class = "validate"></input>
          <label for="mucosas">Mucosas</label>        
        </div>
        <div class="input-field col s4">
          <input type = "text" id = "pele" class = "validate"></input>
          <label for="pele">Pele</label>        
        </div>
        <div class="input-field col s4">
          <input type = "text" id = "pelos" class = "validate"></input>
          <label for="pelos">P&ecirc;los</label>        
        </div>
      </div>
      <div class = "row">
        <div class = "input-field col s12">
          <input type = "text" id = "estadoGeral" class = "validate" required></input>
          <label for = "estadoGeral"> Estado geral</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="cabeca" class="materialize-textarea"></textarea>
          <label for="cabeca">Cabe&ccedil;a (olhos, ouvidos, cavidade bucal, narinas e dentes)</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="sistR" class="materialize-textarea"></textarea>
          <label for="sistR">Sistema respirat&oacute;rio</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="sistC" class="materialize-textarea"></textarea>
          <label for="sistC">Sistema circulat&oacute;rio</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="sistD" class="materialize-textarea"></textarea>
          <label for="sistD">Sistema digestivo</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="sistG" class="materialize-textarea"></textarea>
          <label for="sistG">Sistema getourin&aacute;rio</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="sistN" class="materialize-textarea"></textarea>
          <label for="sistN">Sistema neurol&oacute;gico</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="sistL" class="materialize-textarea"></textarea>
          <label for="sistL">Sistema locomotor</label>        
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <input type="checkbox" id="analise"/>
          <label for = "analise">An&aacute;lises cl&iacute;nicas</label>  
        </div>
        <div class="input-field col s3">
          <input type="checkbox" id="cavitario"/>
          <label for = "cavitario">Cavit&aacute;rio</label>  
        </div>
        <div class="input-field col s3">
          <input type="checkbox" id="urina"/>
          <label for = "urina">Urina</label>  
        </div>
      </div>
      <div class = "row">
        <div class = "input-field col s12">
          <textarea id = "diagnostico" class = "materialize-textarea" required></textarea>
          <label for "diagnostico">Diagn&oacute;stico/Suspeita</label>
        </div>
      </div>
      <div class = "row">
        <div class = "input-field col s6">
          <textarea id = "terReal" class = "materialize-textarea"></textarea>
          <label for "terReal">Terapia realizada(no consult&oacute;rio)</label>
        </div>
        <div class = "input-field col s6">
          <textarea id = "terPresc" class = "materialize-textarea"></textarea>
          <label for "terPresc">Terapia prescrita</label>
        </div>
      </div>
      <div class = "row">
       <div class = "center-align col s12">
          <button class="btn waves-effect waves-light" id = "btnCadastrarAnimal" type="submit" name="action">Cadastrar
            <i class="material-icons right">done</i>
          </button>
        </div>
      </div>  
    </form>
  </div>
    </div>
  </div>
</div>

<script type="text/javascript">
document.getElementById('ectoparasitos').onchange = function() {
    document.getElementById('ect').disabled = !this.checked;
};
</script>
<script type="text/javascript"> 
      jQuery.noConflict();
      jQuery(function($){
         $("#CPF").mask("999.999.999-99");
         $("#celular").mask("(99) 99999-9999");
         $("#telefone").mask("(99) 9999-9999");
          $("#btnCadastrarAnimal").click(function(){
            Materialize.toast($toastContent, 5000);
            });
    });
      </script> 