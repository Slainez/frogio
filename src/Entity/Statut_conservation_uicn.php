<?php

namespace Foxital\Frogio\Entity;

use Foxital\Frogio\Db;

class Statut_conservation_uicn
{

    private int $id_statut;
    private string $code;
    private string $statut;
    private string $icone;
    private string $description;


    /**
     * Get the value of id_statut
     */
    public function getId_statut()
    {
        return $this->id_statut;
    }

    /**
     * Set the value of id_statut
     *
     * @return  self
     */
    public function setId_statut($id_statut)
    {
        $this->id_statut = $id_statut;

        return $this;
    }

    /**
     * Get the value of code
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of statut
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get the value of icone
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Set the value of icone
     *
     * @return  self
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function list()
    {
        return Db::getInstance()->getAll($this);
    }
}
