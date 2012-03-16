<?php
    $contact = new SimpleXMLElement("contact.xml", null, true);
    
    echo "Prénom : $contact->prenom <br/>";
    echo "Origine nom : ".$contact->nom['origine']."<br/>";