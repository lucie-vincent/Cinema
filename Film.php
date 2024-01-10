<?php


class Film {
    // attributs - propriétés
    private string $_titre;
    private int $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_genre;
    private Acteur $_acteur;
    // private string $_synopsis;

    //constructeur
    public function __construct( string $titre, int $dateSortie, int $duree, Realisateur $realisateur, string $genre) {
        // affectation aux attributs paramétrables
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this);
        $this->_genre = $genre;
        
        // affectation aux attributs non paramétrables
        $this->_acteur = $acteur;
        $this->_acteur->addFilm($this);
        // $this-> _synopsis = $synopsis;
    }

    // accesseurs - getters
    public function getTitre() : string {
        return $this->_titre;
    }

    
    public function getDateSorte() : int {
        return $this->_dateSortie;
    }

    
    public function getDuree() : int {
        return $this->_duree;
    }

    
    public function getRealisateur() : Realisateur {
        return $this->_realisateur;
    }

    
    public function getGenre() : string {
        return $this->_genre;
    }

    public function getActeur() : Acteur {
        return $this->_acteur;
    }
    
    public function getSynopsis() : string {
        return $this->_synopsis;
    }


    // mutateurs - setters
    public function setTitre(string $titre) {
        $this->_titre = $titre;
    }

    public function setDateSortie(int $dateSortie) {
        $this->_dateSortie = $dateSortie;
    }

    public function setDuree(int $duree) {
        $this->_duree = $duree;
    }

    public function setRealisateur(Realisateur $realisateur) {
        $this->_realisateur = $realisateur;
    }

    public function setGenre(string $genre) {
        $this->_genre = $genre;
    }

    public function setActeur(Acteur $acteur) {
        $this->_acteur = $acteur;
    }

    public function setSynopsis(string $synopsis) {
        $this->_synopsis = $synopsis;
    }


    // méthodes



    public function __toString() {
        return "$this->_titre ($this->_dateSortie)";
    }

}