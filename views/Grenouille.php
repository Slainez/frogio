<?php

use Moi\Frogio\Controller\GrenouilleController;
use Moi\Frogio\Entity\Grenouille;


$frog = new Grenouille();
$gc = new GrenouilleController($frog);
$results = $gc->setView();


foreach ($results as $grenouille) {
  echo $grenouille->getId_grenouille() . "<br>";
  echo $grenouille->getNom_scientifique() . "<br>";
  echo $grenouille->getTaille() . "<br>";
  echo $grenouille->getAltitude() . "<br>";
  echo $grenouille->getImage() . "<br>";
  echo $grenouille->getFamille()->getNom_famille() . "<br>";
  echo $grenouille->getStatut()->getStatut() . "<br>";
}