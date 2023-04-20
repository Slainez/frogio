<?php

namespace Foxital\Frogio;
use PDO;
use PDOException;

class Db extends PDO{
  private static $instance = null ;
  private static string $dsn = "mysql:dbname=frogs;host=localhost";
  private static string $user = "root";
  private static string $pwd = "root";

  public function __construct(){
    try {
      return parent::__construct(self::$dsn,self::$user,self::$pwd);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public static function getInstance(){
    if(is_null(self::$instance)){
      self::$instance = new Db();
    }
    return self::$instance;
  }
}
