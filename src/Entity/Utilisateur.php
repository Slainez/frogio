<?php
namespace Foxital\Frogio\Entity;

use Foxital\Frogio\Db;

class Utilisateur{

    private int $id_utilisateur;
    private string $peusdo;
    private string $mail;
    private string $password;
    private Db $instanceDatabase = Db::getInstance();

    public function __construct()
    {
    
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

    /**
     * Get the value of peusdo
     */ 
    public function getPeusdo()
    {
        return $this->peusdo;
    }

    /**
     * Set the value of peusdo
     *
     * @return  self
     */ 
    public function setPeusdo($peusdo)
    {
        $this->peusdo = $peusdo;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function list(){
        return $this->instanceDatabase->getAll();
    }
}