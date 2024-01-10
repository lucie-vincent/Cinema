<?php

class Realisateur {
    // attributs - propriétés
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_dateNaissance;
    private array $_films; 

    //constructeur
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_films = [];
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

    public function getFilms() : array {
        return $this->_films;
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

    public function setFilms(array $films) {
        $this->_films = $films;
    }

    //méthodes

    public function addFilm(Film $film) {
        $this->_films[] = $film;
    }

    public function afficherFilmographie() {
        $resultat = "<h2>Filmographie de $this</h2><ul>";
        foreach ($this->films as $film) {
            $resultat .= " <li> $livre </li>";
        }
        $resultat .= "</ul>";
        return $resultat;
    }

    public function __toString() {
        return "$this->_prenom $this->_nom";
    }

}