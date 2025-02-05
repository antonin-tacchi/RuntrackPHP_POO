<?php
class Vehicule{
    public string $marque;
    public string $modele;
    public string $annee;
    public int $prix;

    public function __construct(string $marque, string $modele, string $annee, int $prix){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    public function afficher(){
        return "Marque: " . $this->marque . "<br> Modèle: " . $this->modele . "<br> Année: " . $this->annee . "<br> Prix: " . $this->prix . "€<br>";
    }
    public function demarer(){
        return "Attention, je roule";
    }

}
class Voiture extends Vehicule{
    public int $portes;
    public function __construct(string $marque, string $modele, string $annee, int $prix, int $portes){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->portes = $portes = 4;
    }
    public function informationVehicule(){
        return parent::afficher() . "Nombre de portes: " . $this->portes . "<br>";
    }
    public function demarer(){
        return "Attention, je roule en voiture";
    }
}

class Moto extends Vehicule{
    public int $roues;
    
    public function __construct(string $marque, string $modele, string $annee, int $prix, int $roues){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roues = $roues = 2;
    }
    public function informationVehicule(){
        return parent::afficher() . "Nombre de roues: " . $this->roues . "<br>";
    }
    public function demarer(){
        return "Attention, je roule en moto";
    }
}



$Voiture = new Voiture("Mercedes", "Classe A", "2020", 18500, 4);
echo $Voiture->informationVehicule();
echo $Voiture->demarer() . "<br>" . "<br>";
$Moto = new Moto("Yamaha", "1200 V-Max", "1987", 4500, 2);
echo $Moto->informationVehicule();
echo $Moto->demarer();

?>