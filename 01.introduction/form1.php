<?php
if (isset($_POST['firstname'])) {
    $prenom=$_POST['firstname'];
   
    $link = mysqli_connect('localhost', 'root', 'alonso', 'formation'); //mysql_connect('[host]', '[user]', '[password]', '[database]');
    mysqli_query($link, 'SET NAMES UTF8');
    
    $sql="INSERT INTO contact (prenom) VALUES('$prenom')";
    $succes = mysqli_query($link, $sql);
   
    if($succes){
        $msg="Bravo vous êtes inscrit.";
    } else {
        $msg="Erreur pendant l'inscription";
    }
    mysqli_close($link);
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