<?php

namespace Foxital\Frogio\Controller;

use Foxital\Frogio\Entity\Famille;

class FamilleController
{
  private Famille $model;

  public function __construct(Famille $model)
  {
    $this->model = $model;
  }

  public function setView()
  {
    $results = $this->model->list();
    return $results;
  }
}
