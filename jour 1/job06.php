<?php

class Personnage {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function gauche() {
        $this->x -= 1;
    }

    public function droite() {
        $this->x += 1;
    }

    public function haut() {
        $this->y -= 1;
    }

    public function bas() {
        $this->y += 1;
    }

    public function position() {
        return "Position: (" . $this->x . ", " . $this->y . ")";
    }
}

// Instancier un personnage
$personnage = new Personnage(0, 0);

// Déplacer le personnage
$personnage->droite();
$personnage->bas();

// Afficher la position du personnage
echo $personnage->position() . "\n";

?>