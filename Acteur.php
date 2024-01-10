<?php

class Acteur extends Personne {
    //atttributs
    // constructeur
    public function __construct(string $prenom, string $nom, string $sexe, int $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
    }
    // accesseurs - getters
    public function getRoles() : array {
        return $this->_roles;
    }
    // mutateurs - setters
    public function setFilms(array $films) {
        $this->_roles = $roles;
    }
    // méthodes

    public function addRoles(Role $role) {
        $this->_roles[] = $role;
    }

    public function afficherFilmographie() {
        $resultat = "<h2>Filmographie de $this</h2><ul>";
        foreach ($this->_roles as $role) {
            $resultat .= " <li> $role </li>";
        }
        $resultat .= "</ul>";
        return $resultat;
    }
}