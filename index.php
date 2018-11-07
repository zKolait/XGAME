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
                <div class="article-top-left">
                    <a href="">
                        <div class="wrapper">
                            <img class="img-article" src="img/image1.png" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="Article nos partenaires">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="article-top-right">
                    <a href="">
                        <div class="wrapper">
                            <img class="img-article" src="img/image2.png" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="Article nos partenaires">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="mid-article">
                <div class="mid-article-mid">
                    <a href="">
                        <div class="wrapper2">
                            <img class="img-article" src="img/image3.png" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="Article nos partenaires">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="bottom-article">
                <div class="article-bottom-left">
                    <a href="">
                        <div class="wrapper">
                            <img class="img-article" src="img/image4.png" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="Article nos partenaires">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="article-bottom-right">
                    <a href="">
                        <div class="wrapper">
                            <img class="img-article" src="img/image5.png" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="Article nos partenaires">
                            </div>
                        </div>
                    </a>
                </div>
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