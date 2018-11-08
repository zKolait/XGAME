<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SnowSet</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>



<body>

<div class="contact">
    <h3>Contact</h3>

    <form method="POST">
        <input type="text" name="name" placeholder="Nom">
        <input type="email" name="email" placeholder="Adresse email">
        <input type="text" name="subject" placeholder="Objet">
        <textarea rows="4" name="message" placeholder="Message"></textarea>
        <input type="submit" id="submit" value="Envoyer">
        <div id="reponse"></div>
    </form>

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