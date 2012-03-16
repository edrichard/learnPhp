<?php
    $dns = "mysql:host=localhost;dbname=formation";
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    try{
        $pdo = new PDO($dns, "root", "alonso", $option);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Erreur de connection.");
    }
    
    $sql="SELECT * FROM villes";
    
    try{
        $stmt = $pdo->query($sql);
        $villes = $stmt->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Liste des contacts</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <p>Liste des villes : </p>
        <ul>
        <?php foreach ($villes as $ville) {
            echo '<li>'.$ville->nom.'</li>';
        } ?>
        </ul>
    </body>
</html>
