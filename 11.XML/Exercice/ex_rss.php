<?php
    function __autoload($nomClass){
        require_once "classes/$nomClass.php";
    }

    if (isset ($_POST["selectflux"])){
            $titleFlux=$_POST["selectflux"];

            $articles = new SimpleXMLElement("$titleFlux",null,true);
            $descriptionFlux = $articles->channel->description;
            $titleFlux = $articles->channel->title;

            $nbArticles = $articles->channel->item->count();

            for ($i=0;$i<$nbArticles;$i++){
                $tblTitres[$i]= new Article($articles->channel->item[$i]->title, 
                                            $articles->channel->item[$i]->link, 
                                            $articles->channel->item[$i]->description,
                                            $articles->channel->item[$i]->pubDate);
            }
    } else {
        $titleFlux="";
        $descriptionFlux="";
        $tblTitres= new Article();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>exemple lecture de flux RSS</title>
    </head>
    <body>
        
        <form action="" method="POST">
            <select name="selectflux">
                <option value="YahooWeather.xml">Yahoo Weather</option>
                <option value="lemonde.xml">Le monde</option>
                <option value="http://www.lequipe.fr/rss/actu_rss_Formule1.xml">L'équipe : Formule 1</option>
            </select>
            <input type="submit" value="valider">
        </form>
        
        <h1><?php echo $titleFlux;?></h1>
        <p><?php echo $descriptionFlux;?></p>
        <ul>
            <?php foreach ($tblTitres as $tbl) : ?>
                <li><?php echo $tbl->getTitre(); ?></li>
                <?php echo $tbl->getDescription(); ?>
                <?php echo $tbl->getDate()."<br>"; ?>
                <?php echo "<a href=".$tbl->getLink().">Lien</a><br><br>"; ?>
            <?php endforeach; ?>
        </ul> 
    </body>
</html>