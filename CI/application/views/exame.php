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
        <h1 class="center-align ">Exames</h1>
                <table class = "striped responsive-table centered">
        <thead>
          <tr>
              <th data-field="id_consulta">ID consulta</th>
              <th data-field="tipo">Tipo</th>
              <th data-field="realizar">Realizar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($consultas as $consulta) : ?>
          <tr>
            <?php if($consulta->status == 'P'): ?>
            <td><?php echo $consulta->id_consulta ?></td>
            <td><?php 
                if($consulta->hemograma == 'S') {
                  echo "Hemograma";
                }
                if($consulta->urinalise == 'S'){
                  echo "Urinalise";
                }
                if($consulta->cavitario == 'S'){
                  echo "Cavitario";
                }              
                if($consulta->bioquimico == 'S'){
                  echo "Bioquimico";
                }
                ?>
            </td>
            <td>
              <a 
              <?php 
              if($consulta->cavitario == 'S') {
                echo "href ="; echo base_url().'exame/cavitario/'.$consulta->id_consulta;
              }
              if($consulta->urinalise == 'S'){
                    echo "href ="; echo base_url().'exame/urinalise/'.$consulta->id_consulta;
              }
              if($consulta->hemograma == 'S'){
                      echo "href ="; echo base_url().'exame/hemograma/'.$consulta->id_consulta;
              }
              if($consulta->bioquimico == 'S'){
                         echo "href ="; echo base_url().'exame/bioquimico/'.$consulta->id_consulta;
              }              
              ?>
              <i class="material-icons">edit</i>
            </a>
            </td>
          <?php endif; ?>
          </tr>
        <?php endforeach; ?>
        </table>
       </div>
    </div>
</div>

<script type="text/javascript">$(".button-collapse").sideNav();</script>
    
<?php $this->load->view('includes/footer'); ?>