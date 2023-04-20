<?php

namespace Foxital\Frogio\Entity;

use Foxital\Frogio\Db;

class Collection
{
    private int $id_collection;
    private string $nom_collection;
    private string $description_collection;
    private int $id_utilisateur;

    /**
     * Get the value of id_collection
     */
    public function getId_collection()
    {
        return $this->id_collection;
    }

    /**
     * Set the value of id_collection
     *
     * @return  self
     */
    public function setId_collection($id_collection)
    {
        $this->id_collection = $id_collection;

        return $this;
    }

    /**
     * Get the value of nom_collection
     */
    public function getNom_collection()
    {
        return $this->nom_collection;
    }

    /**
     * Set the value of nom_collection
     *
     * @return  self
     */
    public function setNom_collection($nom_collection)
    {
        $this->nom_collection = $nom_collection;

        return $this;
    }

    /**
     * Get the value of description_collection
     */
    public function getDescription_collection()
    {
        return $this->description_collection;
    }

    /**
     * Set the value of description_collection
     *
     * @return  self
     */
    public function setDescription_collection($description_collection)
    {
        $this->description_collection = $description_collection;

        return $this;
    }

    /**
     * Get the value of id_utilisateur
     */
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    public function list()
    {
        return Db::getInstance()->getAll($this);
    }
}
