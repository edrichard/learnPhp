<?php
    class Personne {
        private $prenom;
        
        function __construct($prenom) {
            $this->prenom = (string) $prenom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function setPrenom($prenom) {
            $this->prenom = $prenom;
        }
    }

    // type scallaire :
    $prenom1 = "Jean";
    $prenom2 = $prenom1;
    $prenom2 = "Eric";
    echo $prenom1."<hr/>";
    
    //type objet :
    $p1 = new Personne("Jean");
    $p2 = $p1;
    $p2->setPrenom("Eric");
    echo $p1->getPrenom();