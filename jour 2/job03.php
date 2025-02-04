<?php
class Livre {
    private $titre;
    private $auteur;
    private $nb_pages;
    private $disponible;

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
        $this->disponible = true; // Initialisation par défaut à True
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

    // Méthode pour vérifier si le livre est disponible
    public function verification() {
        return $this->disponible ? true : false;
    }

    // Méthode pour emprunter le livre
    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
            echo "Le livre '$this->titre' a été emprunté." . "<br>";
        } else {
            echo "Le livre '$this->titre' n'est pas disponible." . "<br>";
        }
    }

    // Méthode pour rendre le livre
    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
            echo "Le livre '$this->titre' a été rendu." . "<br>";
        } else {
            echo "Le livre '$this->titre' n'a pas été emprunté." . "<br>";
        }
    }

    // Méthode pour afficher les informations du livre
    public function afficher() {
        echo "Titre: " . $this->titre . ", Auteur: " . $this->auteur . ", Nombre de pages: " . $this->nb_pages . ", Disponible: " . ($this->disponible ? "Non" : "Oui") . "<br>";
    }
}

// Exemple d'utilisation
$livre = new Livre("Les Misérables", "Victor Hugo", 1200);
$livre->afficher();  // Le livre est disponible
$livre->emprunter();  // Emprunter le livre
$livre->afficher();  // Le livre n'est plus disponible
$livre->rendre();  // Rendre le livre
$livre->afficher();  // Le livre est de nouveau disponible
$livre->emprunter();  // Emprunter à nouveau
$livre->emprunter();  // Essayer de l'emprunter une deuxième fois, ce n'est pas possible
?>
