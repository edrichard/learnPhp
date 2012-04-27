<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <title><?php echo $title ?> | Recettes</title>
        <link rel="stylesheet" type="text/css" href="Views/themes/styles.css" />
        <link rel="stylesheet" type="text/css" href="Views/bootstrap/css/bootstrap.css" />
        <script src="Views/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="navbar">
            <div class="navbar-inner">
                <div class="container">
                        <a class="brand" href="#">Recettes</a>
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <i class="icon-home  icon-white"></i>
                                    Accueil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bookmark  icon-white"></i>
                                    Recettes
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-list-alt  icon-white"></i>
                                    Ingrédients
                                </a>
                            </li>
                        </ul>
                        <!--<form class="navbar-search pull-left" action="">
                            <input class="search-query span2" type="text" placeholder="Recherche">
                        </form>-->
                </div>
            </div>
        </header>
        <div id="wrapper" class="span12">
            <?php echo $content ?>
        </div>
        <footer>
            <?php echo date("Y") ?> &COPY; Recettes
        </footer>
    </body>
</html> 