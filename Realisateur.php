<?php

class Realisateur extends Personne {
    // attributs
    private array $_films; 
    // constructeur
    public function __construct(string $prenom, string $nom, string $sexe, int $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->_films = [];
    }
    // accesseurs - getters
    public function getFilms() : array {
        return $this->_films;
    }
    // mutateurs - setters
    public function setFilms(array $films) {
        $this->_films = $films;
    }

    // méthodes
    public function addFilm(Film $film) {
        $this->_films[] = $film;
    }

    public function afficherFilmographie() {
        $resultat = "<h2>Filmographie de $this</h2><ul>";
        foreach ($this->_films as $film) {
            $resultat .= " <li> $film </li>";
        }
        return $resultat;
    }



}