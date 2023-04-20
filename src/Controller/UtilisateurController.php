<?php

namespace Foxital\Frogio\Controller;
use Foxital\Frogio\Entity\Utilisateur;

class UtilisateurController{

    public function setView(){
        $test = new Utilisateur();
        $results = $test->list();
        return $results;
      }

}