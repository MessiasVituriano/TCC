<script>
        var i =  new Number();
          i = 1800;//1800 segundos igual a 30 minutos
        var minutos = new Number();
        var segundos = new Number();
        function contagemRegressiva()
        {
            i--;
            minutos = Math.floor(i / 60);
            segundos = i % 60;
            if(minutos < 10){
              minutos = '0'+minutos;
              minutos = minutos.substr(0,2);
            }
            if (segundos < 10) {
              segundos = '0'+segundos;
              segundos = segundos.substr(0,2);
            }
            document.getElementById('cronometro').innerHTML = '00:' + minutos + ':' + segundos;
}
  setInterval("contagemRegressiva()", 1000);
</script>

<div class = "navbar-fixed">  
  <nav>
  <div class="nav-wrapper blue" >
      <a href="#" class="brand-logo left"><img src="<?php echo base_url().'img/logo.png'; ?>" alt="Logo"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Hospital Veterin&aacute;rio da UESC</a></li>
          <li><?php echo  'Bem vindo: '.$this->session->userdata('nome_completo'); ?></li>
          <li id = 'cronometro'>00:30:00</li>
          <li><a href=<?php echo base_url().'usuario/logout/'?>>Sair</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li><a href="#">Hospital Veterin&aacute;rio da UESC</a></li>
          <li><?php echo  'Bem vindo: '.$this->session->userdata('nome_completo'); ?></li> 
          <li><a href=<?php echo base_url().'usuario/logout/'?>>Sair</a></li>
      </ul>
    </div>
  </nav>
</div>
