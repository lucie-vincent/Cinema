<?php

class Acteur extends Personne {
    //atttributs
    private array $_castings;

    // constructeur
    public function __construct(string $prenom, string $nom, string $sexe, int $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        $this->_castings = [];
    }

    // accesseurs - getters
    public function getCastings() : array {
        return $this->_castings;
    }

    // mutateurs - setters
    public function setFilms(array $castings) {
        $this->_castings = $castings;
    }

    // méthodes
    public function addCasting(Casting $casting) {
        $this->_castings[] = $casting;
    }

    public function afficherCasting() {
        $resultat = "<h2>Liste des rôles joués par $this </h2>";
        foreach ($this->_castings as $casting) {
            $resultat .= "$casting";
        }
        return $resultat;
    }
}