<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snowset</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>


<body>

    <div class="container">

        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php"><span>HOME</span></a></li>
                    <li><a href="boutique.php"><span>BOUTIQUE</span></a></li>
                    <li><a href="partenaires.php"><span>PARTENAIRE</span></a></li>
                    <li><a href="marque.php"><span>NOTRE MARQUE</span></a></li>
                    <li><a href="panier.php"><span>PANIER</span></a></li>
                </ul>
            </nav>
        </div>

        <header>

            <section class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt="Logo SnowSet"></a>
                    <h1>SNOWSET</h1>
                </div>

                <nav>
                    <ul>
                        <li><a href="boutique.php"><span>BOUTIQUE</span></a></li>
                        <li><a href="partenaires.php"><span>PARTENAIRE</span></a></li>
                        <li><a href="marque.php"><span>NOTRE MARQUE</span></a></li>
                        <li><a href="panier.php"><span>PANIER</span></a></li>
                    </ul>

                    <img src="img/menu.png" alt="Menu" id="menu">
                </nav>
            </section>

            <div class="showcase">
                <div class="article">
                    <a href="marque.phpw">DISCOVER</a>
                </div>
            </div>

        </header>

       <main>
            <div class="top-article">
                <div class="article-top-left">
                    <a href="partenaires.php">
                        <div class="wrapper">
                            <img class="img-article" src="img/image1.png" alt="Partenaires Snowset">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="Article nos partenaires">
                            </div>
                        </div>
                    </a>
                </div>

                <div class="article-top-right">
                    <a href="marque.php">
                        <div class="wrapper">
                            <img class="img-article" src="img/image2.png" alt="Marque Snowset">
                            <div class="info">
                                <img src="img/article-top-right.png" alt="Notre marque Snowset">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="mid-article">
                <div class="mid-article-mid">
                    <a href="boutique.php">
                        <div class="wrapper2">
                            <img class="img-article" src="img/image3.png" alt="Boutique 2019">
                            <div class="info">
                                <img src="img/article-mid.png" alt="Collection boutique 2019">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="bottom-article">
                <div class="article-bottom-left">
                    <div class="wrapper">
                        <img class="img-article" src="img/image4.png" alt="snowset">
                    </div>
                </div>

                <div class="article-bottom-right">
                    <div class="wrapper">
                        <img class="img-article" src="img/image5.png" alt="snowset">
                    </div>
                </div>
            </div>

            <button class="topBtn"><i class="fas fa-arrow-circle-up"></i></button>
        </main>

        <?php
        @include 'includes/footer.php';
        ?>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $("#menu").click(function() {
            $(".menu").css("display", "flex").hide().fadeIn();
            $("body").css("overflow", "hidden");
        });

        $(".menu").click(function() {
            $(".menu").css("display", "none");
            $("body").css("overflow", "scroll");
        });
    </script>
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>