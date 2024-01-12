<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

// réalisateurs
$ridleyScott = new Realisateur("Ridley", "SCOTT", "Masculin", 1937);
$georgeLucas = new Realisateur("George", "LUCAS", "Masculin", 1944);
$christopherNolan = new Realisateur("Christopher", "NOLAN", "Masculin", 1970);
$timBurton = new Realisateur("Tim", "BURTON", "Masculin", 1958);
$joelSchumacher = new Realisateur("Joel","SCHUMACHER", "Masculin", 1939);

// acteurs
$susanSarandon = new Acteur("Susan", "SARANDON", "Feminin", 1946);
$christianBale = new Acteur("Christian", "BALE", "Masculin", 1974);
$michaelKeaton = new Acteur("Michael", "KEATON", "Masculin", 1958);
$valKilmer = new Acteur("Val", "KILMER", "Masculin", 1959);

// genres
$sF = new Genre("SF");
$drameHistorique = new Genre("Drame historique");
$roadMovie = new Genre("Road movie");
$superHeros = new Genre("Super-Héros");

// films
$bladeRunner = new Film("Blade Runner", 1982, 117, $ridleyScott, $sF);
$leDernierDuel = new Film("Le Dernier Duel", 2021, 152, $ridleyScott, $drameHistorique);
$thelmaLouise = new Film("Thelma et Louise", 1991, 129, $ridleyScott, $roadMovie);
$starWars = new Film("Star Wars", 1977, 121, $georgeLucas, $sF);
$batmanBegins = new Film("Batman Begins", 2005, 140, $christopherNolan, $superHeros);
$batmanBurton = new Film("Batman", 1989, 126, $timBurton, $superHeros);
$batmanForever = new Film("Batman Forever", 1995, 121, $joelSchumacher, $superHeros);

// roles
$batman = new Role("Batman");

// castings
$castingBatmanBegins = new Casting($batmanBegins, $christianBale, $batman);

// appel de fonctions
echo $batmanBegins->afficherCasting();
echo $christianBale->afficherCasting();
echo $batman->afficherRoles();
// echo $ridleyScott->afficherInfos();
// echo $ridleyScott->afficherFilmographie();
// echo $bladeRunner->afficherInfosFilm();
// echo $sF->filmsParGenre();
// echo $susanSarandon->afficherInfos();
// var_dump($castingBatmanBegins);
// echo $castingBatmanBegins;

