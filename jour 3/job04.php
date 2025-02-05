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
$Rectangle = new Rectangle(5, 10);
echo $Rectangle->aire();
?>