<?php
class Personne{
    public int $age = 14;

    public function afficherAge(){
        return $this->age . "<br>";
    }
    public function Bonjour(){
        return "Bonjour " . "<br>";
    }
    public function modifierAge($age){
        $this->age = $age;
    }
}
class Eleve extends Personne{
    public function allerEnCours(){
        return "Je vais en cours. J'ai " . $this->age . " ans" . "<br>";
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
echo $eleve->Bonjour();
echo $eleve->modifierAge(15);
echo $eleve->allerEnCours() . "<br>";

$professeur = new Professeur();
$professeur->modifierAge(40);
echo $professeur->bonjour();
echo $professeur->enseigner();

?>
