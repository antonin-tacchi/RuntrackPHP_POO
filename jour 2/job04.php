<?php

class Etudiant {
    // Attributs privés
    private $prenom;
    private $nom;
    private $numeroEtudiant;
    private $credits;
    private $niveau;

    // Constructeur
    public function __construct($prenom, $nom, $numeroEtudiant) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->numeroEtudiant = $numeroEtudiant;
        $this->credits = 0; // Initialisation des crédits à zéro
        $this->niveau = $this->evaluerEtudiant(); // Niveau basé sur les crédits
    }

    // Méthode pour ajouter des crédits
    public function ajouterCredits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->niveau = $this->evaluerEtudiant(); // Mise à jour du niveau après ajout de crédits
        } else {
            echo "Erreur : Le nombre de crédits doit être supérieur à zéro." . "<br>";
        }
    }

    // Méthode privée pour évaluer le niveau de l'étudiant
    private function evaluerEtudiant() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    // Méthode pour afficher les informations de l'étudiant
    public function afficherInfosEtudiant() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prénom : " . $this->prenom . "<br>";
        echo "ID : " . $this->numeroEtudiant . "<br>";
        echo "Niveau : " . $this->niveau . "<br>";
    }
}

// Instanciation de l'étudiant John Doe
$etudiantJohn = new Etudiant("John", "Doe", 145);

// Ajout de crédits à trois reprises
$etudiantJohn->ajouterCredits(30);
$etudiantJohn->ajouterCredits(25);
$etudiantJohn->ajouterCredits(20);

// Affichage des informations de l'étudiant
$etudiantJohn->afficherInfosEtudiant();

?>
