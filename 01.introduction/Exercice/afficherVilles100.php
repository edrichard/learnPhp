<?php
    $link = mysqli_connect('localhost', 'root', 'alonso', 'formation'); //mysqli_connect('[host]', '[user]', '[password]', '[database]');
    mysqli_query($link, 'SET NAMES UTF8');
    
    $sql="SELECT * FROM villes ORDER BY nom DESC LIMIT 0, 100";
    $result = mysqli_query($link, $sql) or error_log(mysql_error());
    
    $villes = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $villes[] = $row;
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
            echo '<li>'.htmlentities($ville['nom']).'</li>';
        } ?>
        </ul>
        <p><a href="insertVille.php">Rajouter une autre ville</a></p>
    </body>
</html>
