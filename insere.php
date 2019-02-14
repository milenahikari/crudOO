<?php

  require_once('class/Funcionario.php');
  require_once('class/FuncionarioDao.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $genero = $_POST['genero'];
  $data_nasc = $_POST['data_nasc'];

  $funcionario = new Funcionario(null, $nome, $email, $genero, $data_nasc);
  $funcionarioDao = new FuncionarioDao();
  $funcionarioDao->insert($funcionario);
  header("Location:index.php");

?>
