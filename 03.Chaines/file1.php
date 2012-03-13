<?php
    header('Content-type: text/html; charset=UTF-8');
    
    $name = "Eddy";
    $string1 = 'Bonjour $name'; //affiche caractère par caractère
    $string2 = "Bonjour $name"; //analyse des caractères et concatène les varaiables avec le reste
    echo $string1.' - '.$string2;

//Notation Herdoc
echo <<<HERDOC
<p><a href="http://www.google.fr" />Google</a></p>
HERDOC;

echo <<<'NOWDOC'
<p>Equivalent avec des apostrophes...</p>
NOWDOC;
