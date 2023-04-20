<?php

namespace Foxital\Frogio\Controller;

use Foxital\Frogio\Entity\Collection;

class CollectionController
{
    private Collection $model;

    public function __construct(Collection $model)
    {
        $this->model = $model;
    }

    public function setView()
    {
        $results = $this->model->list();
        return $results;
    }
}