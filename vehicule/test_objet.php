<?php
// Inclusion de la classe Vehicule
include('./vehicule.php');

// Création de 2 objets.
$voiture = new Vehicule("Mercedes CLK", 4, 250);
$moto = new Vehicule("Honda CBR", 2, 280);

// Appel de la méthode qui détecte le type de vehicule.
echo("Ce véhicule est : ".$voiture->detect()."</p>");
echo("Ce véhicule est : ".$moto->detect()."</p>");

// Appel de la méthode boost() de la voiture, et affichage de la nouvelle vitesse.
$voiture->boost();
echo("<p>La nouvelle vitesse de la voiture est de : ".$voiture->getVitesse(). " km/h.</p>");

//
$lePlusRapide = $voiture->plusRapide($moto);
echo("<p>Le Véhicule le plus rapide est : ".$lePlusRapide->getNom()."</p>");