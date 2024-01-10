<?php

class Realisateur {
    // attributs - propriétés
    private string $_prenom;
    private string $_nom;
    private string $_sexe;
    private int $_dateNaissance;
    private array $_films; 

    //constructeur
    public function __construct(string $prenom, string $nom, string $sexe, int $dateNaissance) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = $dateNaissance;
        $this->_films = [];
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

    public function getFilms() : array {
        return $this->_films;
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