<?php

class Vehicule {
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;

    public function __construct(string $nomVehicule, int $nbrRoue, float $vitesse) {
        $this->nomVehicule = $nomVehicule;
        $this->nbrRoue = $nbrRoue;
        $this->vitesse = $vitesse;
    }

    public function detect(): void {
        if $nbrRoue <= 2{
            return string moto;
        }else{
            return string voiture;
        }
    }

    public function demarer(): void {
        
    }
}

?>