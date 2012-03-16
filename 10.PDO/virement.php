<?php
if(isset($_POST['debiteur'], $_POST['crediteur'], $_POST['montant']))
{
    // LECTURE d'une BDD
    $dns = "mysql:host=localhost;dbname=test";
    $option = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
    
    try
    {
        $pdo = new PDO($dns, "root", "alonso", $option);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        die("Erreur à la connection");
    }

    // 3/ Ecriture de la requete SQL
    $sqlDebit = "UPDATE compte SET solde = solde - $_POST[montant] WHERE id = $_POST[debiteur]";
    $sqlCredit = "UPDATE compte SET solde = solde + $_POST[montant] WHERE id = $_POST[crediteur]";

    try
    {
        $pdo->beginTransaction(); // SET AUTOCOMMIT = 0;

        $nbDebit = $pdo->exec($sqlDebit);
        //
        $nbCredit = $pdo->exec($sqlCredit);

        if(1 == $nbDebit && 1 == $nbCredit)
        {
            $pdo->commit();
            $msg = "Le virement a été effectué";
        }    
        else
        {
            $pdo->rollBack();
            $msg = "Erreur lors du virement";
        }
    }
    catch(PDOException $e)
    {
        $pdo->rollBack();
    }
}
else
{
    $msg = "Veuillez saisir vos infos de virement";
}
?>
<!doctype html>
<html>
    <head>
        <title>Exemple de formulaire de virement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(isset($msg)) : ?>
        <p><?php echo $msg; ?></p>
        <?php endif; ?>
        <form method="post">
            <p>
                Compte débiteur :
                <input name="debiteur">
            </p>
            <p>
                Compter créditeur :
                <input name="crediteur">
            </p>
            <p>
                Montant :
                <input name="montant">
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </body>
</html>