<?php
if (isset($_POST['login'], $_POST['mdp'])) {
    
    $dns = "mysql:host=localhost;dbname=formation";
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    try{
        $pdo = new PDO($dns, "root", "alonso", $option);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Erreur de connection.");
    }
 
    $sql="SELECT * FROM membres WHERE login = :login AND pass = MD5(:mdp)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('login', $_POST['login']);
    $stmt->bindValue('mdp', $_POST['mdp']);
    $stmt->execute();
    
    $nbMembre = $stmt->rowCount();
    
    if($nbMembre == 1){
        $membre = $stmt->fetch(PDO::FETCH_ASSOC);
        $msg="<font color='green'>Bravo $membre[login] vous êtes connecté.</font>";
    } else {
        $msg="<font color='orange'>Erreur : mauvais login ou mauvais mot de passe.</font>";
    }
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