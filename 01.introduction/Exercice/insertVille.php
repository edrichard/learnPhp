<?php
if (isset($_POST['city']) && isset($_POST['cp'])) {
    $city = $_POST['city'];
    $cp = $_POST['cp'];
   
    $link = mysqli_connect('localhost', 'root', 'alonso', 'formation'); //mysqli_connect('[host]', '[user]', '[password]', '[database]');
    mysqli_query($link, 'SET NAMES UTF8');
    
    $sql="INSERT INTO villes (nom, cp) VALUES('$city', '$cp')";
    $succes = mysqli_query($link, $sql);
   
    if($succes){
        $msg="<font color='green'>Bravo la ville est inscrite.</font>";
        header("Location: afficherVilles100.php");
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
            <label for="city">Ville : </label><input type="text" name="city" value="<?php if(isset($city)) echo $city ?>" /><br/>
            <label for="cp"></label>Code postal : </label><input type="text" size="4" name="cp" value="<?php if(isset($cp)) echo $cp ?>" /><br/>
            <input type="submit" value="Enregistrer la ville!" />
        </form>
    </body>
</html>