<?php

class Voiture {
    // Attributs privés
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;
    private $typeCarburant;

    // Constructeur
    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;  // Par défaut la voiture est arrêtée
        $this->reservoir = 50;      // Par défaut, le réservoir est plein (50)
        $this->typeCarburant = "Essence"; // Par défaut, le type de carburant est l'essence
    }

    // Mutateurs et accesseurs pour chaque attribut
    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function getKilometrage() {
        return $this->kilometrage;
    }

    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function getEnMarche() {
        return $this->en_marche;
    }

    public function setEnMarche($en_marche) {
        $this->en_marche = $en_marche;
    }
    public function getReservoir() {
        return $this->reservoir;
    }
    public function setReservoir($reservoir) {
        $this->reservoir = $reservoir;
    }
    public function getTypeCarburant() {
        return $this->typeCarburant;
    }
    public function setTypeCarburant($typeCarburant) {
        $this->typeCarburant = $typeCarburant;
    }

    // Méthodes pour démarrer et arrêter la voiture
    public function demarrer() {
        if ($this->verifierPlein() > 5 && $this->VerifiertypeCarburant() == "Essence") {
            $this->en_marche = true;
            echo "La voiture démarre." . "<br>";
        } elseif ($this->verifierPlein() > 5 && $this->VerifiertypeCarburant() != "Essence") {
            echo "Impossible de démarrer, mauvais carburant ! " ."<br>";
        }
        else {
            echo "Impossible de démarrer, réservoir vide ! " . "<br>";
        }
    }

    // Méthode privée pour vérifier le niveau du réservoir
    private function verifierPlein() {
        return $this->reservoir;
    }
    private function VerifiertypeCarburant() {
        return $this->typeCarburant;
    }
    public function afficher(){
        echo "Marque: " . $this->marque . "<br>" . "Modèle: " . $this->modele . "<br>" . "Année: " . $this->annee . "<br>" . "Kilométrage: " . $this->kilometrage . "<br>" . "<br>" . "Capacité du réservoir: 120L" . "<br>" . "Utilisation du Carburant Actuelle : " . $this->reservoir . "<br>" . "<br>" . "Type de carburant: Essence ". "<br>" . "Carburant en cours d'utilisation : " . $this->typeCarburant . "<br>" . "<br>";
    }
}

// Exemple d'utilisation
$voiture = new Voiture("Toyota", "Corolla", 2020, 25000);
$voiture->setTypeCarburant("Diesel");
$voiture->setReservoir(10);
$voiture->afficher();
$voiture->demarrer(); // Devrait afficher "La voiture démarre."
?>
