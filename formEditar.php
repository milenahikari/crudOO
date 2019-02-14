<?php
  require_once('cabecalho.php');
  require_once('class/FuncionarioDao.php');

  $id = $_GET['id'];

  $funcionarioDao = new FuncionarioDao();
  $lista = $funcionarioDao->select($id);
?>
  <br>
  <div class="container">
    <h1>Formulário Editar</h1>
    <form action="editar.php" method="post">
      <?php foreach ($lista as $linha): ?>
      <table class="table">
        <tr>
          <td>Nome:</td>
          <td>
            <input type="text" name="nome" class="form-control" value="<?=$linha['nome']?>">
          </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>
            <input type="email" name="email" class="form-control" value="<?=$linha['email']?>">
          </td>
        </tr>
        <tr>
          <td>Gênero:</td>
          <td>
            <input type="radio" name="genero"  value="m" <?php if ($linha['genero'] == 'm'): ?> checked="checked" <?php endif; ?>>Masculino
            <input type="radio" name="genero"  value="f" <?php if ($linha['genero'] == 'f'): ?> checked="checked" <?php endif; ?>>Feminino
          </td>
        </tr>
        <tr>
          <td>Data Nascimento:</td>
          <td>
            <input type="date" name="data_nasc" class="form-control" value="<?=$linha['data_nasc']?>">
          </td>
        </tr>
        <input type="hidden" name="id" value="<?=$linha['id']?>">
      </table>
    <?php endforeach; ?>
      <button class="btn btn-primary">Editar</button>
    </form>
  </div>
<?php
  require_once('rodape.php');
?>
