<?php

class Rectangle {
    // Attributs privés
    private $longueur;
    private $largeur;

    // Constructeur pour initialiser les dimensions du rectangle
    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    // Assesseur (getter) pour la longueur
    public function getLongueur() {
        return $this->longueur;
    }

    // Mutateur (setter) pour la longueur
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    // Assesseur (getter) pour la largeur
    public function getLargeur() {
        return $this->largeur;
    }

    // Mutateur (setter) pour la largeur
    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    // Méthode pour afficher les dimensions du rectangle
    public function afficherDimensions() {
        echo "Longueur: " . $this->getLongueur() . " | Largeur: " . $this->getLargeur() . "<br>";
    }
}

// Création d'un rectangle avec les valeurs initiales
$rectangle = new Rectangle(10, 5);

// Affichage des dimensions initiales
echo "Dimensions initiales du rectangle :" . "<br>";
$rectangle->afficherDimensions();

// Modification des dimensions
$rectangle->setLongueur(15);
$rectangle->setLargeur(7);

// Affichage des nouvelles dimensions après modification
echo "\nDimensions après modification :" . "<br>";
$rectangle->afficherDimensions();

?>
