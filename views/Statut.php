<?php

use Moi\Frogio\Controller\StatutController;
use Moi\Frogio\Entity\Statut_conservation_uicn;

$st = new Statut_conservation_uicn();
$fc = new StatutController($st);
$results = $fc->setView();

foreach ($results as $statut) {
    echo '<div class="text-center p-3 m-2 border border-secondary rounded">';
    echo $statut->getCode() . '<br>';
    echo $statut->getStatut() . '<br>';
    echo "<img src='" . $statut->getIcone(). "'/> <br>";
    echo $statut->getDescription() . '<br>';
    echo '</div>';
}
