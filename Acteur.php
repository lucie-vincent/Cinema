<?php

class Acteur extends Realisateur {
 // affectation des attributs (=/= de ceux de Réalisateur)

 // constructeur
    public function __construct(string $prenom, string $nom, string $sexe, int $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
    }

}