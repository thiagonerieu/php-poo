<?php

class Maison {
    private string $nom;
    private float $longueur;
    private float $largeur;
    private int $nbrEtage;

    // Constructeur
    public function __construct(string $nom, float $longueur, float $largeur, int $nbrEtage = 0) {
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nbrEtage = $nbrEtage;
    }

    public function getNom(): string {
        return $this->nom;
    }

    // Calculer surface (prenant en compte les etages)
    public function surface(): void {
        $niveaux = 1 + $this->nbrEtage;
        $superficieTotale = ($this->longueur * $this->largeur) * $niveaux;
        
        echo "<p>La surface totale de la maison " . $this->nom . " est égale à : " . $superficieTotale . " m2</p>";
    }
}

