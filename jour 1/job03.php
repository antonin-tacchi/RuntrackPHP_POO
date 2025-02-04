<?php

class Personne {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        return "Je suis " .$this->prenom ." " . $this->nom . "<br>";
    }
}

// Instancier plusieurs personnes
$personne1 = new Personne("Dupont", "Jean");
$personne2 = new Personne("Doe", "John");

// Appeler la méthode SePresenter pour chaque personne
echo $personne1->SePresenter() . "\n";
echo $personne2->SePresenter() . "\n";

?>