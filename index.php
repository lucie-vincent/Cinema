<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// réalisateurs
$ridleyScott = new Realisateur("Ridley", "SCOTT", "Masculin", 1937);

// acteurs
$susanSarandon = new Acteur("Susan", "SARANDON", "Feminin", 1946);

// films
$BladeRunner = new Film("Blade Runner", 1982, 117, $ridleyScott, "SF");
$LeDernierDuel = new Film("Le Dernier Duel", 2021, 152, $ridleyScott, "Drame historique");
$ThelmaLouise = new Film("Thelma et Louise", 1991, 129, $ridleyScott, "Road movie");

//appel de fonctions
echo $ridleyScott->afficherFilmographie();
// $susanSarandon->addFilm($ThelmaLouise);
// echo $susanSarandon->afficherFilmographie();
