<?php
    require_once 'admin/connexion.php';
    
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
            $admin = "<font color='green'>$membre[login] vous êtes connecté.</font>";
        } else {
            $admin = "<font color='orange'>Erreur : mauvais login ou mauvais mot de passe.</font>";
        }
        mysqli_close($link);
    } else {
        $admin = "<a href='login.php'>Login</a>";
    }

    
    $query = "SELECT * FROM fichiers WHERE publier = 1";
    $result = mysqli_query($link, $query);
    
    $NbrLigne = 0;
    $NbrCol = 7;
?>
<html>
    <head>
        <title>Album photos</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
        <link rel="stylesheet" type="text/css" href="style/style.css" />
    </head>
    <body>
        <header>
            <h1>L'album photos</h1>
            <nav>
                <?php echo $admin; ?>
            </nav>
        </header>
        <article>
            <?php
            if (mysqli_num_rows($result) != 0) {
                $j = 1;
                echo '<table border="0">';
                
                while ($row = mysqli_fetch_array($result)) {
                            $pw = 100/$row['largeur'];
                            $ph = 100/$row['hauteur'];

                            $pw=min($pw,$ph);

                            $w = floor($row['largeur'] * $pw);
                            $h = floor($row['hauteur'] * $pw);
                            if ($j%$NbrCol == 1) {
                            $NbrLigne++;
                            echo "<tr>";
                            $fintr = 0;
                }
                
                echo '<td>';
                echo '<a href="uploads/'.$row['fichier'].'" rel="shadowbox[Vacation]">';
                echo '<img class="imgAlbum" src="uploads/'.$row['fichier'].'" alt="'.$row['fichier'].'" width="'.$w.'" height="'.$h.'" />';
                echo '</a>';
                echo '</td>';
                
                if ($j%$NbrCol == 0) {
                        echo "</tr>"; 
                        $fintr = 1;
                }
                        $j++;
                }

                if ($fintr!=1) { echo '</tr>'; }
                echo '</table>';
            } else {
                echo '<span class="noData">Pas de données à afficher!</span>';
            }
            ?>
        </article>
        <footer>
            Album photo &copy; 2012
        </footer>
        <script type="text/javascript" src="shadowbox/shadowbox.js"></script>
        <script type="text/javascript">
            Shadowbox.init();
        </script>
    </body>
</html>
