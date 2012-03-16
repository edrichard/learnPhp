<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author stagiaire
 */
class Article {
    //put your code here
    protected $titre;
    protected $link;
    protected $description;
    protected $date;
    
    function __construct($titre="", $link="", $description="", $date="") {
        $this->titre = $titre;
        $this->link = $link;
        $this->description = $description;
        $this->date = $date;
    }

    
    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = (string)$titre;
        return $this;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = (string)$link;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = (string)$description;
        return $this;
    }

    public function getDate() {
        setlocale(LC_ALL,'fr','fr_FR','french', 'france', 'fr-FR','fr_FR.UTF-8', 'fr_fr.UTF-8');
        return strftime("%A %d %B %Y à %Hh%Mm%Ss", strtotime($this->date));
    }

    public function setDate($date) {
        $this->$date = $date;
        return $this;
    }
}

?>
