<?php

namespace Moi\Frogio\Controller;

use Moi\Frogio\Entity\Statut_conservation_uicn;

class StatutController
{
    private Statut_conservation_uicn $model;

    public function __construct(Statut_conservation_uicn $model)
    {
        $this->model = $model;
    }

    public function setView()
    {
        $results = $this->model->list();
        return $results;
    }
}
