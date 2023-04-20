<?php

namespace Moi\Frogio\Controller;
use Moi\Frogio\Entity\Famille;

class FamilleController {


  public function setView(){
    $test = new Famille();
    $results = $test->list();
    return $results;
  }


}