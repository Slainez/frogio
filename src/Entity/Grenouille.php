<?php 

namespace Moi\Frogio\Entity;

use Moi\Frogio\Db;
use Moi\Frogio\Entity\Famille;
use Moi\Frogio\Entity\Statut_conservation_uicn;

class Grenouille {
  private int $id_grenouille ;
  private string $nom_scientifique ;
  private float $taille ;
  private float $altitude ;
  private string $image ;
  private Famille $famille ;
  private Statut_conservation_uicn $statut ;

  public function __construct(){

  }

  /**
   * Get the value of id_grenouille
   */ 
  public function getId_grenouille()
  {
    return $this->id_grenouille;
  }

  /**
   * Set the value of id_grenouille
   *
   * @return  self
   */ 
  public function setId_grenouille($id_grenouille)
  {
    $this->id_grenouille = $id_grenouille;

    return $this;
  }

  /**
   * Get the value of nom_scientifique
   */ 
  public function getNom_scientifique()
  {
    return $this->nom_scientifique;
  }

  /**
   * Set the value of nom_scientifique
   *
   * @return  self
   */ 
  public function setNom_scientifique($nom_scientifique)
  {
    $this->nom_scientifique = $nom_scientifique;

    return $this;
  }

  /**
   * Get the value of taille
   */ 
  public function getTaille()
  {
    return $this->taille;
  }

  /**
   * Set the value of taille
   *
   * @return  self
   */ 
  public function setTaille($taille)
  {
    $this->taille = $taille;

    return $this;
  }

  /**
   * Get the value of altitude
   */ 
  public function getAltitude()
  {
    return $this->altitude;
  }

  /**
   * Set the value of altitude
   *
   * @return  self
   */ 
  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;

    return $this;
  }

  /**
   * Get the value of image
   */ 
  public function getImage()
  {
    return $this->image;
  }

  /**
   * Set the value of image
   *
   * @return  self
   */ 
  public function setImage($image)
  {
    $this->image = $image;

    return $this;
  }

  /**
   * Get the value of famille
   */ 
  public function getFamille()
  {
    return $this->famille;
  }

  /**
   * Set the value of famille
   *
   * @return  self
   */ 
  public function setFamille($famille)
  {
    $this->famille = $famille;

    return $this;
  }

  /**
   * Get the value of statut
   */ 
  public function getStatut()
  {
    return $this->statut;
  }

  /**
   * Set the value of statut
   *
   * @return  self
   */ 
  public function setStatut($statut)
  {
    $this->statut = $statut;

    return $this;
  }

  public function list(){
    $frogs = Db::getInstance()->getAllFrogs();
     
    
    $listFrogs = [];
     foreach($frogs as $frog){
      
      $famille = new Famille();
      $famille->setId_famille($frog['id_famille']);
      $famille->setNom_famille($frog['nom_famille']);

      
      $statut = new Statut_conservation_uicn();
      $statut->setId_statut($frog['id_statut']);
      $statut->setCode($frog['code']);
      $statut->setStatut($frog['statut']);
      $statut->setIcone($frog['icone']);
      $statut->setDescription($frog['description']);


      $froggy = new Grenouille();
      $froggy->setId_grenouille($frog['id_grenouille']);
      $froggy->setNom_scientifique($frog['nom_scientifique']);
      $froggy->setTaille($frog['taille']);
      $froggy->setAltitude($frog['altitude']);
      $froggy->setImage($frog['image']);
      $froggy->setFamille($famille);
      $froggy->setStatut($statut);

      $listFrogs[] = $froggy ;
    
    }
   
    
    return $listFrogs ;
}
  
}