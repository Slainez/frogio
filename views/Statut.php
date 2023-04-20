<?php
use Foxital\Frogio\Controller\StatutController;

$fc = new StatutController();
$results = $fc->setView();

foreach($results as $statut){
  echo $statut->getCode() . '<br>';
  echo $statut->getStatut() . '<br>';
  echo $statut->getIcone() . '<br>';
  echo $statut->getDescription() . '<br>';
}