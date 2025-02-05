<?php
class Personne{
    public int $age = 14;

    public function afficherAge(){
        return $this->age . "<br>";
    }
    public function Bonjour(){
        return "Hello " . "<br>";
    }
    public function modifierAge($age){
        $this->age = $age;
    }
}
class Eleve extends Personne{
    public function allerEnCours(){
        return "Je vais en cours. J'ai " . $this->age . " ans";
    }
}
class Professeur extends Personne{
    private string $matiereEnseigner;

    public function enseigner(){
        return "Le cours va commencer";
    }
}
$personne = new Personne();
$eleve = new Eleve();
echo $personne->afficherAge();
?>
