<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snowset</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>


<body>

    <div class="container">

        <header>

            <section class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt="Logo SnowSet"></a>
                    <h1>SNOWSET</h1>
                </div>

                <nav>
                    <ul>
                        <li><a href="boutique.php"><span>BOUTIQUE</span></a></li>
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
            <div class="top-article">
                <article class="article-top-left">
                    <img src="img/image1.png" alt="">
                </article>

                <article class="article-top-right">
                    <img src="img/image2.png" alt="">
                </article>
            </div>

            <div class="mid-article">
                <article class="mid-article-mid">
                    <img src="img/image3.png" alt="">
                </article>
            </div>

            <div class="bottom-article">
                <article class="article-bottom-left">
                    <img src="img/image4.png" alt="">
                </article>

                <article class="article-bottom-right">
                    <img src="img/image5.png" alt="">
                </article>
            </div>
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