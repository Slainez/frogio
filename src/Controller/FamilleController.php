<?php

namespace Foxital\Frogio\Controller;
use Foxital\Frogio\Entity\Famille;

class FamilleController {


  public function setView(){
    $test = new Famille();
    $results = $test->list();
    return $results;
  }


}