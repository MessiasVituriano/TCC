
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
        <h1 class="center-align ">Usu&aacute;rios</h1>
                <table class = "striped responsive-table centered">
        <thead>
          <tr>
              <th data-field="nome_completo">Nome completo</th>
              <th data-field="nome_usuario">Nome usu&aacute;rio</th>
              <th data-field="tipo">Tipo</th>
              <th data-field="atualizar">Editar</th>
              <th data-field="delete">Excluir</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
          <tr>
            <td><?php echo $usuario->nome_completo ?></td>
            <td><?php echo $usuario->nome_usuario ?></td>
            <td><?php switch ($usuario->tipo) {
                case 'V':
                    echo "Veterin&aacute;rio";
                break;
                case 'T':
                    echo "T&eacute;cnico"; 
                break;
                case 'S':
                    echo "Supervisor"; 
                break;
                default:
                    break;
                }
                ?>
            </td>
            <td><a href=<?php echo base_url().'usuario/update_usuario/'.$usuario->id;?>><i class="material-icons">edit</i></a></td>
            <td><a  href=<?php echo base_url().'usuario/delete/'.$usuario->id;?> onclick="return confirm('Remover usuario?');"><i class="material-icons">delete</i></a></td>
          </tr>
        <?php endforeach; ?>
        </table>
       </div>
      <div class = "row">
         <div class = "center-align col s12">
            <a class="waves-effect waves-light btn" href=<?php echo base_url().'usuario/insert';?>><i class="material-icons right">add</i>Inserir usu&aacute;rio</a>
          </div>
        </div>        
    </div>
</div>

<script type="text/javascript">$(".button-collapse").sideNav();</script>
    
<?php $this->load->view('includes/footer'); ?>