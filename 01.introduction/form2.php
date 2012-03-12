<?php
if (isset($_POST['firstname'])) {
    $prenom=$_POST['firstname'];
   
    mysql_connect('localhost', 'root', 'alonso'); //mysql_connect('[host]', '[user]', '[password]');
    mysql_select_db('formation');
    
    mysql_query('SET NAMES UTF8');
    
    $sql="INSERT INTO contact (prenom) VALUES('$prenom')";
    $succes = mysql_query($sql);
    
    if($succes){
        $msg="Bravo vous êtes inscrit.";
    } else {
        $msg="Erreur pendant l'inscription";
    }
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