<?php

use Foxital\Frogio\Controller\CollectionController;
use Foxital\Frogio\Entity\Collection;

$collections = new Collection();
$fc = new CollectionController($collections);
$results = $fc->setView();

foreach ($results as $collection) {
    echo $collection->getId_collection() . "<br>";
    echo $collection->getNom_collection() . "<br>";
    echo $collection->getDescription_collection() . "<br>";
    echo $collection->getId_utilisateur() . "<br>";
  }