<?php

class Role {
    // attributs
    private string $_role;
    // constructeur
    public function __construct($role) {
        $this->_role = $role;
    }
    // accesseurs - getters
    public function getRole() : string {
        return $this->_role;
    }
    // mutateurs - setters
    public function setRole(string $role) {
        $this->_role = $role;
    }
    // méthodes




    public function __toString() {
        return "$this->_role";
    }
}