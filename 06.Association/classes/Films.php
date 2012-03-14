<?php

/**
 * Description of Films
 *
 * @author edrichard
 */
class Films {
    private $titre;
    private $duree;
    private $resume;
    private $realisateur;
    private $acteur;
    
    function __construct($titre, $realisateur = null) {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->acteur = array();
    }
    
    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function getResume() {
        return $this->resume;
    }

    public function setResume($resume) {
        $this->resume = $resume;
    }
    
    public function ajoutActeur(Personne $a){
        $this->acteur[] = $a;
    }
    
    public function infoFilm(){
        echo "Titre : $this->titre <br/>";
        if($this->duree != null){
            $heure = $this->duree / 3600;
            echo "Durée du film : $heure heures<br/>";
        }
        if($this->resume != null){
            echo "Résumé du film : $this->resume <br/>";
        }
        echo "Réalisateur du film : ".$this->realisateur->getNom()." ".$this->realisateur->getPrenom()."<br/>";
        echo "Acteur du film : <ul>";
        foreach ($this->acteur as $a) {
            echo "<li>".$a->getNom()." ".$a->getPrenom()."</li>";
        }
        echo "</ul>";
    }
}

?>
