<?php

/**
 * Description of Footballeur
 *
 * @author edrichard
 */
class Footballeur extends Personne {
   private $poste;
   private $club;
   
   public function __construct($prenom, $nom, $poste="Sur le banc de touche", $club="Sans club") {
       parent::__construct($prenom, $nom);
       $this->poste = $poste;
       $this->club = $club;
   }
   
   public function getPoste() {
       return $this->poste;
   }

   public function setPoste($poste) {
       $this->poste = $poste;
   }

   public function getClub() {
       return $this->club;
   }

   public function setClub($club) {
       $this->club = $club;
   }

   public function dribler(){
       echo "je drible...";
   }
   
   public function tireAuBut(){
       echo "je tire au but...";
   }
}

?>
