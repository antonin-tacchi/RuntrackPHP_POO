<?php

class Animal {
    public $age;
    public $prenom;

    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    public function vieillir() {
        $this->age += 1;
    }

    public function nommer($prenom) {
        $this->prenom = $prenom ;
    }
}

// Instancier un objet Animal
$animal = new Animal();

// Afficher l'attribut age
echo "Age: " . $animal->age . "<br>";

// Faire vieillir l'animal
$animal->vieillir();
echo "Age après vieillissement: " . $animal->age . "<br>";

// Nommer l'animal
$animal->nommer("Luna");
echo "Nom de l'animal: " . $animal->prenom . "<br>";

?>