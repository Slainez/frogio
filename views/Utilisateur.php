<?php
use Foxital\Frogio\Controller\UtilisateurController;

$fc = new UtilisateurController();
$results = $fc->setView();

foreach($results as $utilisateur){
  echo $utilisateur->getPseudo() . '<br>';
  echo $utilisateur->getMail();
}

