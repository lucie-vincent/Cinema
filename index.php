<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// réalisateurs
$ridleyScott = new Realisateur("Ridley", "SCOTT", "Masculin", 1937);
$georgeLucas = new Realisateur("George", "LUCAS", "Masculin", 1944);

// genres
$sF = new Genre("SF");
$drameHistorique = new Genre("Drame historique");
$roadMovie = new Genre("Road movie");

// // films
$bladeRunner = new Film("Blade Runner", 1982, 117, $ridleyScott,$sF);
$leDernierDuel = new Film("Le Dernier Duel", 2021, 152, $ridleyScott, $drameHistorique);
$thelmaLouise = new Film("Thelma et Louise", 1991, 129, $ridleyScott, $roadMovie);
$starWars = new Film("Star Wars", 1977, 121, $georgeLucas, $sF);

// // acteurs
$susanSarandon = new Acteur("Susan", "SARANDON", "Feminin", 1946);


//appel de fonctions
echo $ridleyScott->afficherInfos();
echo $ridleyScott->afficherFilmographie();
echo $bladeRunner->afficherInfosFilm();
echo $sF->filmsParGenre();
echo $susanSarandon->afficherInfos();

