<?php

use Foxital\Frogio\Controller\StatutController;
use Foxital\Frogio\Entity\Statut_conservation_uicn;

$st = new Statut_conservation_uicn();
$fc = new StatutController($st);
$results = $fc->setView();

foreach ($results as $statut) {
    echo $statut->getCode() . '<br>';
    echo $statut->getStatut() . '<br>';
    echo $statut->getIcone() . '<br>';
    echo $statut->getDescription() . '<br>';
}
