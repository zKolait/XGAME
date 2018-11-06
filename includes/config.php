<?php

$bdd = new PDO('mysql:host=localhost;dbname=xgame', 'root', '');


function checkForm($name, $email, $subject, $message){
    if (empty($name))
        throw new Exception('Veuillez remplir tous les champs.');
    if (empty($email))
        throw new Exception('Veuillez remplir tous les champs.');
    if (empty($subject))
        throw new Exception('Veuillez remplir tous les champs.');
    if (empty($message))
        throw new Exception('Veuillez remplir tous les champs.');
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        throw new Exception('Email invalide.');
}


if(isset($_POST["name"]) AND isset($_POST["email"]) AND isset($_POST["subject"]) AND isset($_POST["message"])){

    try {

        checkForm($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]);

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        $InsertBdd = $bdd->prepare("INSERT INTO xgames(name, email, subject, message) VALUES (?, ?, ?, ?)");
        $InsertBdd->execute(array($name, $email, $subject, $message));

        echo "success";

    } catch (Exception $e) {
        echo $e->getMessage();
    }

}


?>