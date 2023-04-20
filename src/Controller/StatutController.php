<?php

namespace Foxital\Frogio\Controller;
use Foxital\Frogio\Entity\Statut_conservation_uicn;

class StatutController{

    public function setView(){
        $test = new Statut_conservation_uicn();
        $results = $test->list();
        return $results;
      }

}