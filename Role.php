<?php

class Role {
    // attributs
    private string $_role;
    private array $_castings;

    // constructeur
    public function __construct($role) {
        $this->_role = $role;
        $this->_castings = [];
    }

    // accesseurs - getters
    public function getRole() : string {
        return $this->_role;
    }

    public function getCastings() : array {
        return $this->_castings;
    }

    // mutateurs - setters
    public function setRole(string $role) {
        $this->_role = $role;
    }

    public function setFilms(array $castings) {
        $this->_castings = $castings;
    }

    // méthodes

    public function addCasting(Casting $casting) {
        $this->_castings[] = $casting;
    }

    public function afficherRoles() {
        $resultat = "<h2>Liste des acteurs ayant joué $this </h2>";
        foreach ($this->_castings as $casting) {
            $resultat .= " $casting ";
        }
        return $resultat;
    }

    public function __toString() {
        return "$this->_role";
    }
}