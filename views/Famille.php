<?php 
use Moi\Frogio\Controller\FamilleController ;
use Moi\Frogio\Entity\Famille ;

$famille = new Famille() ;
$fc = new FamilleController($famille);
$results = $fc->setView();


foreach($results as $famille){
  echo $famille->getNom_famille()."<br>";
}

