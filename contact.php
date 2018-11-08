<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="container">

    <?php include 'includes/header.php' ?>

    <main>

        <div class="title-center">
            <h2><span>Nous contacter</span></h2>
        </div>

        <p><i>N'hésitez pas à nous laisser un message si vous avez la moindre interrogation sur notre produit ou si vous souhaitez obtenir plus de renseignements, l'équipe Snowset est à votre disposition !</i></p>

    </main>

    <div class="contact">
        <form method="POST">
            <input type="text" name="name" placeholder="Nom">
            <input type="email" name="email" placeholder="Adresse email">
            <input type="text" name="subject" placeholder="Objet">
            <textarea rows="4" name="message" placeholder="Message"></textarea>
            <div class="btn-form">
                <input type="submit" id="submit" value="Envoyer">
            </div>
            <div id="reponse"></div>
        </form>
    </div>

    <?php include 'includes/footer.php' ?>

</div>

<script>
    $("#submit").click(function(e){
        e.preventDefault();
        $.post(
            'includes/config.php',
            {
                name : $( "input[name=name]" ).val(),
                email : $( "input[name=email]" ).val(),
                subject : $( "input[name=subject]" ).val(),
                message : $( "textarea[name=message]" ).val()
            },
            function NewInfos(data){
                if(data == "success")
                    $('#reponse').text("Vous avez bien envoyé votre message.");
                else
                    $('#reponse').text(data);
            }
        ),
            'text'
    });
</script>
</body>
</html>