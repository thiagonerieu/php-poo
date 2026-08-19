<?php
// Inclusion de la classe Maison
require_once 'Maison.php';

// Instanciation d'une nouvelle maison avec des valeurs au choix
$maSuperbeMaison = new Maison("Samba de Janeiro", 15.0, 10.5);

// Appel de la méthode qui calcule et affiche la superficie
$maSuperbeMaison->surface();


