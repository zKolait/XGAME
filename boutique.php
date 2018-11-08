<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snowset Boutique</title>
    <meta name="keywords" content="SnowSet,Sky,Chaussette,Socks,Sport,Stylized,Colorful,Snow,Neige,Equipement,Boutique,Shop">
    <meta name="author" content="Nicolas Chapeau et Vianney Traina">
    <meta name="description" content="Notre boutique officielle !">

    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/boutique.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>

	<body>
		<div class="container">

		<?php include 'includes/header.php' ?>

		<main>

			<div class="top-boutique">

				<div class="boutique-top-left">
                    <div class="wrapper">
                        <img src="img/boutique2019.jpg" alt="boutique 2019">
                    </div>
				</div>

				<div class="boutique-top-right">
                    <div class="wrapper">
                        <img src="img/boutiquechaussettes.png" alt="Bien dans vos chaussettes">
                    </div>
				</div>

			</div>

			<div class="bottom-boutique">
				<div class="boutique-bottom-left">
                    <a href="panier.php">
                        <div class="wrapper">
                            <img src="img/boutiquehomme.jpg" alt="collection homme">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="boutique homme">
                            </div>
                        </div>
                    </a>
				</div>

				<div class="boutique-bottom-mid">
                    <a href="panier.php">
                        <div class="wrapper">
                            <img src="img/boutiquefemme.jpg" alt="collection femme">
                            <div class="info">
                                <img src="img/boutique-bottom-mid.png" alt="boutique femme">
                            </div>
                        </div>
                    </a>
				</div>

				<div class="boutique-bottom-right">
                    <a href="panier.php">
                        <div class="wrapper">
                            <img src="img/boutiqueautre.jpg" alt="collection enfant">
                            <div class="info">
                                <img src="img/boutique-bottom-right.png" alt="boutique enfant">
                            </div>
                        </div>
                    </a>
				</div>
			</div>

		</main>

		<?php include 'includes/footer.php' ?>

		</div>
	</body>

</html>