<?php

  require_once("class/FuncionarioDao.php");

  $id = $_GET['id'];

  $funcionarioDao = new FuncionarioDao();
  $funcionarioDao->delete($id);
  header("Location:index.php");
?>
