<?php


namespace Moi\Frogio;

use PDO;
use PDOException;

class Db extends PDO
{
  private static $instance = null;
  private static string $dsn = "mysql:dbname=frogs;host=localhost";
  private static string $user = "root";
  private static string $pwd = "root";

  public function __construct()
  {
    try {
      return parent::__construct(self::$dsn, self::$user, self::$pwd);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public static function getInstance()
  {
    if (is_null(self::$instance)) {
      self::$instance = new Db();
    }
    return self::$instance;
  }

  public function getAll($object)
  {
    $tableName = get_class($object);
    $sql = "select * from " . explode('\\', $tableName)[3];
    $results = $this->query($sql);
    return $results->fetchAll(PDO::FETCH_CLASS, $tableName);
  }

  public function getAllFrogs(){
    $sql = "select * from grenouille g join famille f on g.id_famille = f.id_famille join statut_conservation_uicn s on g.id_statut = s.id_statut";    
    $results = $this->query($sql);
    return $results->fetchAll(PDO::FETCH_ASSOC);
  }
}
