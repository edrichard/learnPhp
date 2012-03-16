<?php
    $contact = new SimpleXMLElement("contact.xml", null, true);
    
    echo "Prénom : $contact->prenom <br/>";
    echo "Origine nom : ".$contact->nom['origine']."<br/>";
    
    echo "<hr/>";
    
    $contacts = new SimpleXMLElement("contacts.xml", null, true);
    
    echo "Prénom : {$contacts->contact[1]->prenom}<br/>";