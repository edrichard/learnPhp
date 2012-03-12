<?php
if (isset($_POST['login'], $_POST['mdp'])) {
    $link = mysqli_connect('localhost', 'root', 'alonso', 'formation'); //mysqli_connect('[host]', '[user]', '[password]', '[database]');
    mysqli_query($link, 'SET NAMES UTF8');
    
    $login = mysqli_real_escape_string($link, $_POST['login']);
    $mdp = mysqli_real_escape_string($link, $_POST['mdp']);
 
    $sql="SELECT * FROM membres WHERE login = '$login' AND pass = MD5('$mdp')";
    $succes = mysqli_query($link, $sql);
    $nbMembre = mysqli_num_rows($succes);
    
    if($nbMembre == 1){
        $membre = mysqli_num_rows($succes);
        $msg="<font color='green'>Bravo $membre[login] vous êtes connecté.</font>";
    } else {
        $msg="<font color='orange'>Erreur : mauvais login ou mauvais mot de passe.</font>";
    }
    mysqli_close($link);
} else {
    $msg ="<font color='red'>Bienvenue!</font>";
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
        <form action="" method="post">
            <label for="login">Login : </label><input type="text" name="login" /><br/>
            <label for="mdp">Mot de passe : </label><input type="password" name="mdp" /><br/>
            <input type="submit" value="Envoyer!" />
        </form>
    </body>
</html>