<?php 
use Foxital\Frogio\Controller\FamilleController;

$fc = new FamilleController();
$results = $fc->setView();

foreach($results as $famille){
  echo $famille->getNom_famille()."<br>";
}

