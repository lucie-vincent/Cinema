<?php

class Realisateur {
    // attributs - propriétés
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_dateNaissance;
     //private array $_film ?

    //constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    //accesseurs - getters
    public function getNom() : string {
        return $this->_nom;
    }

    public function getPrenom() : string {
        return $this->_prenom;
    }

    public function getSexe() : string {
        return $this->_sexe;
    }

    public function getDateNaissance() : DateTime {
        return $this->_dateNaissance;
    }

    //mutateurs - setters
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }

    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }

    public function setSexe(string $sexe) {
        $this->_sexe = $sexe;
    }

    public function setDateNaissance(DateTime $dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }



}