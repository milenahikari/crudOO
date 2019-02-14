<?php
  require_once('cabecalho.php');
?>
  <br>
  <div class="container">
    <h1>Formulário Cadastro</h1>
    <form action="insere.php" method="post">
      <table class="table">
        <tr>
          <td>Nome:</td>
          <td>
            <input type="text" name="nome" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>
            <input type="email" name="email" class="form-control">
          </td>
        </tr>
        <tr>
          <td>Gênero:</td>
          <td>
            <input type="radio" name="genero" value="m">Masculino
            <input type="radio" name="genero" value="f">Feminino
          </td>
        </tr>
        <tr>
          <td>Data Nascimento:</td>
          <td>
            <input type="date" name="data_nasc" class="form-control">
          </td>
        </tr>
      </table>
      <button class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php
  require_once('rodape.php');
?>
