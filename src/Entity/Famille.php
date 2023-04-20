<?php

namespace Foxital\Frogio\Entity;
use Foxital\Frogio\Db;

class Famille {

  private int $id_famille;
  private string $nom_famille; 
  

  public function __construct(){

  }
  
  /**
   * Get the value of id_famille
   */ 
  public function getId_famille()
  {
    return $this->id_famille;
  }

  /**
   * Set the value of id_famille
   *
   * @return  self
   */ 
  public function setId_famille($id_famille)
  {
    $this->id_famille = $id_famille;

    return $this;
  }

  /**
   * Get the value of nom_famille
   */ 
  public function getNom_famille()
  {
    return $this->nom_famille;
  }

  /**
   * Set the value of nom_famille
   *
   * @return  self
   */ 
  public function setNom_famille($nom_famille)
  {
    $this->nom_famille = $nom_famille;

    return $this;
  }

  public function list(){
    return Db::getInstance()->getAll($this);
  }

  
}