<?php

namespace Moi\Frogio\Controller;
use Moi\Frogio\Entity\Famille;

class FamilleController {
  private Famille $model;

  public function __construct(Famille $model){
    $this->model = $model ;
  }

  public function setView(){    
    $results = $this->model->list();
    return $results;
  }


}