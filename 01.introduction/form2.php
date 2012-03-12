<?php
if (isset($_POST['firstname'])) {
    $prenom=$_POST['firstname'];
   
    //Ecriture dans la base de données
   
    // 1- Connection au serveur MySQL
   
    mysql_connect('localhost', 'root', 'alonso'); //mysql_connect('[host]', '[user]', '[password]');
    mysql_select_db('formation');
   
    // 2- Passage en UTF-8
    mysql_query('SET NAMES UTF8');
   
    // 3- Ecriture de la requete SQL
    $sql="INSERT INTO contact (prenom) VALUES('$prenom')";
   
    // 4- Executer la requete SQL
    $succes = mysql_query($sql);
   
    // 5- Vérifier que pas d'erreur
    if($succes){
        $msg="Bravo vous êtes inscrit.";
    } else {
        $msg="Erreur pendant l'inscription";
    }
    // 6- Fermer la connection au serveur MySQL
    mysql_close();
} else {
    $msg ='Bonjour Inconnu';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exemple de formulaire de connexion en PHP</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form action="#" method="post">
            <label for="firstname">Prénom :</label><input type="text" name="firstname" /><br/>
            <input type="submit" value="Envoyer!" />
        </form>
    </body>
</html>