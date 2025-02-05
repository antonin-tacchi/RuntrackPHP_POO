<?php
class Rectangle{
    private int $longueur;
    private int $largeur;

    public function __construct(int $longueur, int $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(){
        return $this->longueur;
    }
    public function getLargeur(){
        return $this->largeur;
    }
    public function setLongueur(int $longueur){
        $this->longueur = $longueur;
    }
    public function setLargeur(int $largeur){
        $this->largeur = $largeur;
    }


    public function perimetre(){
        return ($this->longueur + $this->largeur) * 2;
    }
    public function surface(){
        return $this->longueur * $this->largeur;
    }
}
class Parallelepipede extends Rectangle{
    private int $hauteur;

    public function __construct(int $longueur, int $largeur, int $hauteur){
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    public function volume(){
        return $this->getLongueur() * $this->getLargeur() * $this->hauteur;
    }
}
$rectangle = new Rectangle(5, 10);
echo $rectangle->perimetre() . "<br>";
echo $rectangle->surface() . "<br>";
$Parallelepipede = new Parallelepipede(5, 10, 15);
echo $Parallelepipede->volume();
?>