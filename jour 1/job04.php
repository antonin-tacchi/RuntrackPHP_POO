<?php

class Point {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints() {
        echo "Coordonnées du point: (" . $this->x . ", " . $this->y . ")\n". "<br>";
    }

    public function afficherX() {
        echo "Coordonnée x: " . $this->x . "\n". "<br>";
    }

    public function afficherY() {
        echo "Coordonnée y: " . $this->y . "\n". "<br>";
    }

    public function changerX($x) {
        $this->x = $x;
    }

    public function changerY($y) {
        $this->y = $y;
    }
}

// Instancier un point
$point = new Point(3, 4);

// Afficher les coordonnées du point
$point->afficherLesPoints();

// Afficher les coordonnées x et y séparément
$point->afficherX();
$point->afficherY();

// Changer les coordonnées x et y
$point->changerX(10);
$point->changerY(20);

// Afficher les nouvelles coordonnées du point
$point->afficherLesPoints();

?>