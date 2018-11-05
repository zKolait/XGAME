<!doctype html>

<?php
require "includes/config.php";
$reponse = 0;
if (isset($_POST['NOM']) AND isset($_POST['EMAIL']) AND isset($_POST['OBJET']) AND isset($_POST['MESSAGE'])) {

    if (!empty($_POST['NOM']) AND !empty($_POST['EMAIL']) AND !empty($_POST['OBJET']) AND !empty($_POST['MESSAGE'])) {

        $nom = htmlspecialchars($_POST['NOM']);
        $email = htmlspecialchars($_POST['EMAIL']);
        $objet = htmlspecialchars($_POST['OBJET']);
        $message = htmlspecialchars($_POST['MESSAGE']);

        $InsertBdd = $bdd->prepare("INSERT INTO xgames(nom, email, objet, message) VALUES (?, ?, ?, ?)");
        $InsertBdd->execute(array($nom, $email, $objet, $message));

        $reponse = 1;
        unset ($nom,$email,$objet,$message,$_POST["NOM"],$_POST["EMAIL"],$_POST["OBJET"],$_POST["MESSAGE"]);

    }else{
        echo "1"; //il faut tout remplir
    }
}
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SnowSet</title>
    <link rel="stylesheet" type="text/css" href="css/style_home.css">
</head>



<body>

<div class="contact">
    <h3>Contact</h3>

    <form method="POST">
        <input type="text" name="NOM" placeholder="Nom">
        <input type="email" name="EMAIL" placeholder="Adresse email">
        <input type="text" name="OBJET" placeholder="Objet">
        <textarea rows="4" name="MESSAGE" placeholder="Message"></textarea>
        <input type="submit" name="SUBMIT" value="Envoyer">
        <div id="reponse">
            <?php if($reponse == 1)
                echo "Message envoyé";
            ?>
        </div>
    </form>

</div>

</body>
</html>