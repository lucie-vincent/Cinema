<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$ridleyScott = new Realisateur("Ridley", "SCOTT", "Masculin", 1937);
$BladeRunner = new Film("Blade Runner", 1982, 117, $ridleyScott, "SF");
$LeDernierDuel = new Film("Le Dernier Duel", 2021, 152, $ridleyScott, "Drame Historique");
$susanSarandon = new Acteur("Susan", "SARANDON", "Feminin", 1946);
echo $ridleyScott->afficherFilmographie();
echo $susanSarandon->afficherFilmographie();
