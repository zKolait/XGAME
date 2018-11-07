<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SnowSet</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>


<body>

    <div class="container">

        <header>

            <section class="navbar">
                <div class="logo">
                    <img src="img/logo.png" alt="Logo SnowSet">
                    <h1>SNOWSET</h1>
                </div>

                <nav>
                    <ul>
                        <li><a href=""><span>BOUTIQUE</span></a></li>
                        <li><a href=""><span>PARTENAIRE</span></a></li>
                        <li><a href=""><span>NOTRE MARQUE</span></a></li>
                        <li><a href=""><span>PANIER</span></a></li>
                    </ul>

                    <img src="img/menu.png" alt="Menu" id="menu">
                </nav>
            </section>

            <div class="showcase">
                <div class="article">
                    <a href="">DISCOVER</a>
                </div>
            </div>

        </header>




        <main>

        </main>

    </div>



<?php
    @include 'includes/footer.php';
?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $("#menu").click(function() {
        alert("menu");
        });
    </script>

</body>

</html>