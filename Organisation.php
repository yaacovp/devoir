<?php

class Organisation
    {
        private $nom;
        private $ville;
        private $nbUtilisateur;
        private $users;

    /**
     * @param $nom
     * @param $ville
     * @param $nbUtilisateur
     * @param $utilisateur
     */
    public function __construct($nom, $ville, $nbUtilisateur)
    {
        $this->nom = $nom;
        $this->ville = $ville;
        $this->nbUtilisateur = $nbUtilisateur;
        $this->users= array();
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function gstAdresse($ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getNbUser()
    {
        return $this->nbUtilisateur;
    }

    /**
     * @param mixed $nbUtilisateur
     */
    public function setNbUser($nbUtilisateur): void
    {
        $this->nbUtilisateur = $nbUtilisateur;
    }

    /**
     * @return array
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param array $users
     */
    public function setUser(array $users): void
    {
        $this->users = $users;
    }


}
