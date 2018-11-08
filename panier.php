<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Snowset panier</title>
        <meta name="keywords" content="SnowSet,Sky,Chaussette,Socks,Sport,Stylized,Colorful,Snow,Neige,Equipement">
        <meta name="author" content="Nicolas Chapeau et Vianney Traina">
        <meta name="description" content="Validez vos achats !">

        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/panier.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
    </head>

	<body>
		<div class="container">

		<?php include 'includes/header.php' ?>

            <main>

                <section class="panier">

                    <div class="title-center">
                        <h2><span>Panier</span></h2>
                    </div>

                    <div class="status">
                        <h3 style="color: rgba(252,214,98,1);">RÉCAPITULATIF</h3>
                        <h3>LIVRAISON</h3>
                        <h3>PAYEMENT</h3>
                    </div>


                    <div class="articles">

                        <article>
                            <img src="img/chaussette1.jpg" alt="chaussette pray">
                            <h4><i>PRAY</i></h4>
                            <p>X1 - 20 €</p>
                        </article>

                        <article>
                            <img src="img/chaussette2.jpg" alt="chausette crane">
                            <h4><i>CRANE</i></h4>
                            <p>X1 - 20 €</p>
                        </article>

                        <article>
                            <img src="img/chaussette3.jpg" alt="chausette jager">
                            <h4><i>JAGER</i></h4>
                            <p>X1 - 30 €</p>
                        </article>

                    </div>

                    <section class="achat">

                        <h3>TOTAL DU PANIER</h3>
                        <h3>70 €</h3>

                        <div class="container-btn">
                            <button class="btn discover">ÉTAPE SUIVANTE</button>
                        </div>

                    </section>

                </section>


            </main>

            <?php include 'includes/footer.php' ?>

        </div>
    </body>
</html>