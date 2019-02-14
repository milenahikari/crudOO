<?php

  require_once('class/ConnectionFactory.php');

  class FuncionarioDao
  {
    private $conexao;

    public function __construct()
    {
      $this->conexao = ConnectionFactory::getCon();
    }

    public function select($id)
    {
        $query = "SELECT * FROM funcionarios WHERE id=:id";
        $conexao = $this->conexao->prepare($query);
        $conexao->bindValue(":id", $id);
        $conexao->execute();
        $resultado = $conexao->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function selectAll()
    {
      $query = "SELECT * FROM funcionarios";
      $conexao = $this->conexao->prepare($query);
      $conexao->execute();
      $resultado = $conexao->fetchAll(PDO::FETCH_ASSOC);
      return $resultado;
    }

    public function insert(Funcionario $func)
    {
      $query = "INSERT INTO funcionarios (nome, email, genero, data_nasc) VALUES (:nome, :email, :genero, :data_nasc)";
      $conexao = $this->conexao->prepare($query);

      $conexao->bindValue(":nome", $func->getNome());
      $conexao->bindValue(":email", $func->getEmail());
      $conexao->bindValue(":genero", $func->getGenero());
      $conexao->bindValue(":data_nasc", $func->getDataNasc());
      $conexao->execute();
    }

    public function update(Funcionario $func)
    {
      $query = "UPDATE funcionarios SET nome = :nome, email = :email, genero = :genero, data_nasc = :data_nasc WHERE id = :id";
      $conexao = $this->conexao->prepare($query);

      $conexao->bindValue(":id", $func->getId());
      $conexao->bindValue(":nome", $func->getNome());
      $conexao->bindValue(":email", $func->getEmail());
      $conexao->bindValue(":genero", $func->getGenero());
      $conexao->bindValue(":data_nasc", $func->getDataNasc());
      $conexao->execute();
    }

    public function delete($id)
    {
      $query = "DELETE FROM funcionarios WHERE id = $id";
      $conexao = $this->conexao->prepare($query);
      $conexao->bindValue(":id", $id);
      $conexao->execute();
    }
  }
