<?php

class Genre {
    // attributs
    private string $_genre;
    private array $_films;
    // constructeur
    public function __construct($genre) {
        $this->_genre = $genre;
        $this->_films = [];
    }
    
    // accesseurs - getters
    public function getGenre() : string {
        return $this->_genre;
    }

    public function getFilms() : array {
        return $this->_films;
    }

    // mutateurs - setters
    public function setGenre($genre) {
        $this->_genre = $genre;
    }

    public function setFilms(array $films) {
        $this->_films = $films;
    }

    // méthodes

    public function addFilm(Film $film) {
        $this->_films[] = $film;
    }

    public function filmsParGenre() {
        $resultat = "<h2>Liste de films de $this</h2><ul>";
        foreach ($this->_films as $film) {
            $resultat .= " <li> $film </li>";
        }
        $resultat .= "</ul>";
        return $resultat;
    }

    public function __toString() {
        return "$this->_genre";
    }
}