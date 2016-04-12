
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
          <li><a href=<?php echo base_url().'consulta/logout/'?>>Sair</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li><?php if(isset($mensagem)) echo  'Bem vindo:  '.$mensagem." "; ?></li>
          <li><a href=<?php echo base_url().'consulta/logout/'?>>Sair</a></li>
      </ul>
    </div>
  </nav>
  </div>



  <div class="container">
      <div class="row z-depth-2">
        <div class="col m10 offset-m1 s12">
        <h1 class="center-align ">Consultas</h1>
        <?php echo form_open('consulta/pesquisa'); ?>

        <div class="row">
          <div class="input-field col s11">
            <label for="pesquisa">Pesquisa</label>
            <?php echo form_input('pesquisa', '', 'class = "validate"') ?>
            <?php echo form_error('pesquisa') ?>
          </div>
           <div class = "input-field col s1">
              <a class="btn-floating" href=<?php echo base_url().'consulta/pesquisa';?>><i class="material-icons right">search</i></a>
          </div>        
        </div>
        <?php echo form_close(); ?>

        <table class = "striped responsive-table centered">
        <thead>
          <tr>
              <th data-field="nomeProp">Propiet&aacute;rio</th>
              <th data-field="nomeAnimal">Animal</th>
              <th data-field="visualizar">Visualizar</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($consultas)): ?>        
        <?php foreach ($consultas as $consulta) : ?>
          <tr>
            <td><?php echo $consulta->nomeProp?></td>
            <td><?php echo $consulta->nomeAnimal?></td>
            </td>
            <td><a href=<?php echo base_url().'consulta/visualizar/'.$consulta->id_consulta;?>><i class="material-icons">visibility</i></a></td>
          </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </table>
       </div>
      <div class = "row">
         <div class = "center-align col s12">
            <a class="waves-effect waves-light btn" href=<?php echo base_url().'consulta/cadastro';?>><i class="material-icons right">add</i>Cadastrar consulta</a>
          </div>
        </div>        
    </div>
</div>

<script type="text/javascript">$(".button-collapse").sideNav();</script>
    
<?php $this->load->view('includes/footer'); ?>