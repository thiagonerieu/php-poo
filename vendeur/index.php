<?php
// pour écrire une classe Vendeur.
class Vendeur{
    //ATTRIBUT
    private string $nom; //typage string, encapsulation : private

    //CONSTRUCTEUR : l'ouvrier qui permet de construire un objet à partir d'une classe.
    public function __construct(string $nom) {
        $this->nom = $nom;
    }
    
    //METHOD
    public function getNom() : string{
        return $this->nom;
    }
}

// Je construis un nouvelle objet Vendeur
$yoann = new Vendeur("Yoann");

//récupérons le nom de yoann avec getNom(). La flèche -> permet d'accéder à la propriété ou la méthode d'un objet.

// $nom = $yoann->nom; //ne marche pas car la proriété nom est private; donc je ne peux pas  accéder en dehors de la classe Vendeur.

$nom = $yoann->getNom(); //fonctionne; car getNom() est en public, et donc je peux y accéder en dehors de la classe Vendeur.

//var_dump($yoann);
var_dump($mathieu);
var_dump('Le nom du vendeur est : '.$yoann);
?>