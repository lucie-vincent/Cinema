<?php


class Film {
    // attributs - propriétés
    private string $_titre;
    private int $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private Genre $_genre;

    //constructeur
    public function __construct( string $titre, int $dateSortie, int $duree, Realisateur $realisateur, Genre $genre) {
        // affectation aux attributs paramétrables
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this);
        $this->_genre = $genre;
        $this->_genre->addFilm($this);
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
    
    public function getGenre() : Genre {
        return $this->_genre;
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

    public function setGenre(Genre $genre) {
        $this->_genre = $genre;
    }

    // méthodes

    public function afficherInfosFilm() {
        return "<h2>Informations de $this</h2>
                Réalisateur : $this->_realisateur<br>
                Durée : $this->_duree minutes <br>";
    }

    public function __toString() {
        return "$this->_titre ($this->_dateSortie) - $this->_genre";
    }

}