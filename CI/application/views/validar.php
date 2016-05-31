<?php
$this->load->view('includes/header.php');
?>
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
          <li><a href="#">Hospital Veteri&aacute;rio da UESC</a></li>
          <li><?php echo  'Bem vindo: '.$this->session->userdata('nome_completo'); ?></li>
          <li id = 'cronometro'>00:30:00</li>
          <li><a href=<?php echo base_url().'usuario/logout/'?>>Sair</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li><a href="#">Hospital Veteri&aacute;rio da UESC</a></li>
          <li><?php echo  'Bem vindo: '.$this->session->userdata('nome_completo'); ?></li> 
          <li><a href=<?php echo base_url().'usuario/logout/'?>>Sair</a></li>
      </ul>
    </div>
  </nav>
  </div>
  
  <div class="container">
      <div class="row z-depth-2">
        <div class="col m10 offset-m1 s12">
        <h1 class="center-align ">Exames</h1>

      <h4 class="center-align ">Bioquimicos</h4>

      <table class = "striped responsive-table centered">
        <thead>
          <tr>
            <th data-field="especie">Esp&eacute;cie</th>
            <th data-field="sexo">Sexo</th>
            <th data-field="idade">Idade(anos)</th>
            <th data-field="peso">Peso(Kg)</th>
            <th data-field="validar">Validar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($bioquimicos as $bioquimico) : ?>
          <tr>
          <td><?php 
                  if($bioquimico->especie == 'G'){echo 'Gato'; }else echo 'C&atilde;o';
                ?>
            </td>
            <td><?php 
                  if($bioquimico->sexo == 'F'){echo 'F&ecirc;mea'; }else echo 'Macho';
                ?>
            </td>
            <td><?php 
                  echo $bioquimico->idade;
                ?>
            </td>
            <td><?php 
                  echo $bioquimico->peso;
                ?>
            </td> 
            <td>
              <a 
              <?php 
                    echo "href ="; echo base_url().'validar/bioquimico/'.$bioquimico->id_exame;
              ?>
              <i class="material-icons">done_all</i>
            </a>
            </td>
          </tr>
        <?php endforeach; ?>
        </table>

      <h4 class="center-align ">Cavit&aacute;rios</h4>

      <table class = "striped responsive-table centered">
        <thead>
          <tr>
              <th data-field="especie">Esp&eacute;cie</th>
              <th data-field="sexo">Sexo</th>
              <th data-field="idade">Idade(anos)</th>
              <th data-field="peso">Peso(Kg)</th>
              <th data-field="validar">Validar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($cavitarios as $cavitario) : ?>
          <tr>
            <td><?php 
                  if($cavitario->especie == 'G'){echo 'Gato'; }else echo 'C&atilde;o';
                ?>
            </td>
            <td><?php 
                  if($cavitario->sexo == 'F'){echo 'F&ecirc;mea'; }else echo 'Macho';
                ?>
            </td>
            <td><?php 
                  echo $cavitario->idade;
                ?>
            </td>
            <td><?php 
                  echo $cavitario->peso;
                ?>
            </td> 
            <td>
              <a 
              <?php 
                    echo "href ="; echo base_url().'validar/cavitario/'.$cavitario->id_exame;
              ?>
              <i class="material-icons">done_all</i>
            </a>
            </td>
          </tr>
        <?php endforeach; ?>
        </table>

      <h4 class="center-align ">Hemogramas</h4>

      <table class = "striped responsive-table centered">
        <thead>
          <tr>
              <th data-field="especie">Esp&eacute;cie</th>
              <th data-field="sexo">Sexo</th>
              <th data-field="idade">Idade(anos)</th>
              <th data-field="peso">Peso(Kg)</th>
              <th data-field="validar">Validar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($hemogramas as $hemograma) : ?>
          <tr>
            <td><?php 
                  if($hemograma->especie == 'G'){echo 'Gato'; }else echo 'C&atilde;o';
                ?>
            </td>
            <td><?php 
                  if($hemograma->sexo == 'F'){echo 'F&ecirc;mea'; }else echo 'Macho';
                ?>
            </td>
            <td><?php 
                  echo $hemograma->idade;
                ?>
            </td>
            <td><?php 
                  echo $hemograma->peso;
                ?>
            </td>            
            <td>
              <a 
              <?php 
                    echo "href ="; echo base_url().'validar/hemograma/'.$hemograma->id_exame;
              ?>
              <i class="material-icons">done_all</i>
            </a>
            </td>
          </tr>
        <?php endforeach; ?>
        </table>

      <h4 class="center-align ">Urin&aacute;lises</h4>

      <table class = "striped responsive-table centered">
        <thead>
          <tr>
              <th data-field="especie">Esp&eacute;cie</th>
              <th data-field="sexo">Sexo</th>
              <th data-field="idade">Idade(anos)</th>
              <th data-field="peso">Peso(Kg)</th>
              <th data-field="validar">Validar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($urinalises as $urinalise) : ?>
          <tr>
            <td><?php 
                  if($urinalise->especie == 'G'){echo 'Gato'; }else echo 'C&atilde;o';
                ?>
            </td>
            <td><?php 
                  if($urinalise->sexo == 'F'){echo 'F&ecirc;mea'; }else echo 'Macho';
                ?>
            </td>
            <td><?php 
                  echo $urinalise->idade;
                ?>
            </td>
            <td><?php 
                  echo $urinalise->peso;
                ?>
            </td>
            <td>
              <a 
              <?php 
                    echo "href ="; echo base_url().'validar/urinalise/'.$urinalise->id_exame;
              ?>
              <i class="material-icons">done_all</i>
            </a>
            </td>
          </tr>
        <?php endforeach; ?>
        </table>

       </div>
    </div>
</div>

<script type="text/javascript">$(".button-collapse").sideNav();</script>
    
<?php $this->load->view('includes/footer'); ?>