<?php

namespace Moi\Frogio\Controller;

use Moi\Frogio\Entity\Utilisateur;

class UtilisateurController
{

  public function setView()
  {
    $test = new Utilisateur();
    $results = $test->list();
    return $results;
  }
}
