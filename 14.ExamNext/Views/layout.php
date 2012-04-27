<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title><?php echo $title ?> | Recettes</title>
        <link rel="stylesheet" type="text/css" href="Views/themes/styles.css" />
        <link rel="stylesheet" type="text/css" href="Views/bootstrap/css/bootstrap.css" />
        <script src="Views/bootstrap/js/bootstrap.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="Views/shadowbox-3.0.3/shadowbox.css">
        <script type="text/javascript" src="Views/shadowbox-3.0.3/shadowbox.js"></script>
        <script type="text/javascript">
            Shadowbox.init();
        </script>
    </head>
    <body>
        <header class="navbar">
            <div class="navbar-inner">
                <div class="container">
                        <a class="brand" href="#">Recettes</a>
                        <ul class="nav">
                            <li>
                                <a href="index.php">
                                    <i class="icon-home  icon-white"></i>
                                    Accueil
                                </a>
                            </li>
                            <li>
                                <a href="recette.php">
                                    <i class="icon-bookmark  icon-white"></i>
                                    Recettes
                                </a>
                            </li>
                            <li>
                                <a href="ingredient.php">
                                    <i class="icon-list-alt  icon-white"></i>
                                    Ingrédients
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </header>
        <div id="wrapper" >
            <?php echo $content ?>
        </div>
        <footer>
            <?php echo date("Y") ?> &COPY; Recettes
        </footer>
    </body>
</html> 