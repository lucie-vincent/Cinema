<?php

class Personne {
    // attributs - propriétés
    protected string $_prenom;
    protected string $_nom;
    protected string $_sexe;
    protected int $_dateNaissance;

    //constructeur
    public function __construct(string $prenom, string $nom, string $sexe, int $dateNaissance) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = $dateNaissance;
    }

    //accesseurs - getters
    public function getPrenom() : string {
        return $this->_prenom;
    }
    public function getNom() : string {
        return $this->_nom;
    }

    public function getSexe() : string {
        return $this->_sexe;
    }

    public function getDateNaissance() : int {
        return $this->_dateNaissance;
    }

    //mutateurs - setters
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }

    public function setNom(string $nom) {
        $this->_nom = $nom;
    }

    public function setSexe(string $sexe) {
        $this->_sexe = $sexe;
    }

    public function setDateNaissance(int $dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }

    //méthodes

    public function afficherInfos() {
        return "<h2>Informations de $this</h2>
                Sexe: $this->_sexe <br>
                Date de naissance: $this->_dateNaissance<br>";
    }

    public function __toString() {
        return "$this->_prenom $this->_nom";
    }

}