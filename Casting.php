<?php

class Casting {
    // attributs
    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;
    // construct
    public function __construct(Film $film, Acteur $acteur, Role $role) {
        $this->_film = $film;
        $this->_film->addCasting($this);
        $this->_acteur = $acteur;
        $this->_acteur->addCasting($this);
        $this->_role = $role;
        $this->_role->addCasting($this);
    }
    // accesseurs - getters
    public function getFilm() : Film {
        return $this->_film;
    }

    public function getActeur() : Acteur {
        return $this->_acteur;
    }

    public function getRole() : Role {
        return $this->_role;
    }
    // mutateurs - setters
    public function setFilm(Film $film) {
        $this->_film = $film;
    }
    
    public function setActeur(Acteur $acteur) {
        $this->_acteur = $acteur;
    }

    public function setRole(Role $role) {
        $this->_role = $role;
    }
    // méthodes 

    public function __toString() {
        return "<h3>Film : $this->_film</h3>
                Role : $this->_role<br>
                Acteur : $this->_acteur<br>";
    }
}