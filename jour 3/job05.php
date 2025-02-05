<?php
class Forme{
    public function aire(){
        return 0;
    }
}
class Rectangle extends Forme{
    private $largeur;
    private $hauteur;

    public function __construct(int $largeur, int $hauteur){
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function aire(){
        return $this->largeur * $this->hauteur;
    }
}
class Cercle extends Forme{
    private $radius;

    public function __construct(int $radius){
        $this->radius = $radius;
    }
    public function aire(){
        return pi() * pow($this->radius, 2);
    }
}
$Rectangle = new Rectangle(5, 10);
echo $Rectangle->aire() . "<br>";
$Cercle = new Cercle(5);
echo round($Cercle->aire(), 2);

?>