<?php
if (isset($_POST['firstname'])) {
    $prenom=$_POST['firstname'];
   
    $link = mysqli_connect('localhost', 'root', 'alonso', 'formation'); //mysqli_connect('[host]', '[user]', '[password]', '[database]');
    mysqli_query($link, 'SET NAMES UTF8');
    
    $sql="INSERT INTO contact (prenom) VALUES('$prenom')";
    $succes = mysqli_query($link, $sql);
   
    if($succes){
        $msg="<font color='green'>Bravo vous êtes inscrit.</font>";
    } else {
        $msg="<font color='orange'>Erreur pendant l'inscription.</font>";
    }
    mysqli_close($link);
} else {
    $msg ="<font color='red'>Bonjour Inconnu.</font>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exemple de formulaire de connexion en PHP</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <p><?php echo $msg; ?></p>
        <form action="#" method="post">
            <label for="firstname">Prénom :</label><input type="text" name="firstname" /><br/>
            <input type="submit" value="Envoyer!" />
        </form>
    </body>
</html>