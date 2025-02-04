<?php
class Livre {
    private $titre;
    private $auteur;
    private $nb_pages;

    // Constructeur pour initialiser les attributs
    public function __construct($titre, $auteur, $nb_pages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        // Vérification si le nombre de pages est positif
        if ($nb_pages > 0) {
            $this->nb_pages = $nb_pages;
        } else {
            $this->nb_pages = 0; // Si invalide, on assigne une valeur par défaut
        }
    }

    // Assesseur pour le titre
    public function getTitre() {
        return $this->titre;
    }

    // Mutateur pour le titre
    public function setTitre($titre) {
        $this->titre = $titre;
    }

    // Assesseur pour l'auteur
    public function getAuteur() {
        return $this->auteur;
    }

    // Mutateur pour l'auteur
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    // Assesseur pour le nombre de pages
    public function getNbPages() {
        return $this->nb_pages;
    }

    // Mutateur pour le nombre de pages avec vérification
    public function setNbPages($nb_pages) {
        if (is_int($nb_pages) && $nb_pages > 0) {
            $this->nb_pages = $nb_pages;
        } else {
            echo "Erreur: Le nombre de pages doit être un entier positif." . "<br>";
        }
    }

    // Méthode pour afficher les informations du livre
    public function afficher() {
        echo "Titre: " . $this->titre . ", Auteur: " . $this->auteur . ", Nombre de pages: " . $this->nb_pages . "<br>";
    }
}

// Exemple d'utilisation
$livre = new Livre("Toto", "Thierry Coppée", 1200);
$livre->afficher();
$livre->setNbPages(1500); // Changer le nombre de pages
$livre->afficher();
$livre->setNbPages(-100); // Essayer d'assigner une valeur invalide
$livre->afficher(); // Réaffiche les 1500 pages après la tentative invalide
?>
