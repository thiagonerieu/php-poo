<?php
// Inclusion de la classe Vehicule
require_once 'vehicule.php';

// Instanciation des vehicules avec des valeurs pré-définis.
$maVoiture = new Vehicule($nomVehicule = "Mercedes CLK", $nbrRoue = 4, $vitesse = 250);
$maMoto = new Vehicule($nomVehicule = "Honda CBR", $nbrRoue = 2, $vitesse = 280);

// Appel de la méthode qui détecte le type de vehicule.
$maVoiture->detect($nbrRoue);
$maMoto->detect($nbrRoue);

echo "<p>Le vehicule est une " . $this->detect($nbrRoue) . " .</p>";