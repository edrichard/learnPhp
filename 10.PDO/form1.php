<?php
if (isset($_POST['firstname'])) {
    $prenom=$_POST['firstname'];
   
    $dns = "mysql:host=localhost;dbname=formation;charset=UTF8";
    try{
        $pdo = new PDO($dns, "root", "alonso");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Erreur de connection.");
    }
    
    $sql="INSERT INTO contact (prenom) VALUES('$prenom')";
    
    try{
        $succes = $pdo->exec($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
   
    if($succes){
        $msg="<font color='green'>Bravo vous êtes inscrit.</font>";
    } else {
        $msg="<font color='orange'>Erreur pendant l'inscription.</font>";
    }
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