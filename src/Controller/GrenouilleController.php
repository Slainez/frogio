<?php 

namespace Moi\Frogio\Controller;

use Moi\Frogio\Entity\Grenouille;

class GrenouilleController {
  private Grenouille $model ;

  public function __construct(Grenouille $model)
  {
    $this->model = $model;
  }

  public function setView()
  {
    $results = $this->model->list();
    return $results;
  }
}