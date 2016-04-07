  <div class="container">
      <div class="row z-depth-2">
        <div class="col m10 offset-m1 s12">
        <h1 class="center-align ">Cadastro de usu&aacute;rios</h1>
      <div class="row">
      <div class="row">
    <form class="col s12">
      <div class="col m10 offset-m1 s12">
        <h4 class = "center-align"> Dados</h4>
      </div>
      <div class="row">
        <div class="input-field col s9">
          <input id="nome" type="text" class="validate" required>
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s3">
          <input id="CPF" type="text" class="validate" required>
          <label for="CPF">CPF</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="V" value = "V" />
            <label for="V">Veterin&aacute;rio</label>
        </div>
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="T" value = "T" />
            <label for="T">T&eacute;cnico</label>
        </div>
        <div class="input-field col s4">
            <input name = "tipo" type="radio" id="S" value = "S"/>
            <label for="S">Supervisor</label>
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
      <div class = "row">
          <div class="input-field col s4">
          <input id="password" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      <div class = "row">
       <div class = "center-align col s12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar usu&aacute;rio
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
         });
      </script> 