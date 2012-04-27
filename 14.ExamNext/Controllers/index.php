

<?php

require_once 'Models/index.php';

$title = "Acceuil";
$recettes = getAllRecettes();

require_once 'Views/index.php';
