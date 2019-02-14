<?php

  require_once('cabecalho.php');
  require_once('class/FuncionarioDao.php');
  require_once('class/Funcionario.php');
  $funcionarioDao = new FuncionarioDao();
  $lista = $funcionarioDao->selectAll();
?>
    <div class="container">
      <table class="table">
        <tr>
          <th>Nome</th>
          <th>Email</th>
          <th>Gênero</th>
          <th>Data Nasc</th>
          <th></th>
          <th></th>
        </tr>
        <?php
          foreach ($lista as $linha):

        ?>
        <tr>
          <td><?=$linha['nome'];?></td>
          <td><?=$linha['email'];?></td>
          <td><?=($linha['genero'] == 'm') ? 'Masculino' : 'Feminino' ?></td>
          <td><?= Funcionario::formata($linha['data_nasc']);?></td>
          <td><a class="btn btn-secondary" href="formEditar.php?id=<?=$linha['id'];?>">Editar</a></td>
          <td><a class="btn btn-danger" href="delete.php?id=<?=$linha['id'];?>"">Apagar</a></td>
        </tr>
        <?php
          endforeach;
        ?>
      </table>
    </div>
<?php
  require_once('rodape.php');
?>
