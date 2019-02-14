<?php

  class ConnectionFactory
  {
    private static $host = 'localhost';
    private static $dbname = 'crud';
    private static $user = 'root';
    private static $pass = '';

    public static function getCon()
    {
      try{
        $conexao = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname.'', self::$user, self::$pass);
        return $conexao;
      } catch(PDOException $e){
        echo 'Erro ao conectar ' . $e;
      }
    }
  }
?>
