<?php

    class Funcionario {

      private $id;
      private $nome;
      private $email;
      private $genero;
      private $data_nasc;

      public function __construct($id, $nome, $email, $genero, $data_nasc)
      {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->genero = $genero;
        $this->data_nasc = $data_nasc;

      }

      public function getId()
      {
        return $this->id;
      }

      public function getNome()
      {
        return $this->nome;
      }

      public function getEmail()
      {
        return $this->email;
      }

      public function getGenero()
      {
          return $this->genero;
      }

      public function getDataNasc()
      {
        return $this->data_nasc;
      }

      public static function formata($data) {
        $d = new DateTime($data);
        return $d->format('d/m/Y');
      }
    }
