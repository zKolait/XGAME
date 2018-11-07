<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Boutique</title>
	<title>Snowset</title>
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
				<article class="boutique-top-left">
					<img src="img/boutique2019.jpg" alt="">
					<p>2019</p>
				</article>

				<article class="boutique-top-right">
					<img src="img/boutiquechaussettes.jpg" alt="">
					<p><span>#</span>Bien dans vos chaussettes</p>
				</article>
			</div>

			<div class="bottom-boutique">
				<article class="boutique-bottom-left">
					<img src="img/boutiquehomme.jpg" alt="">
				</article>

				<article class="boutique-bottom-mid">
					<img src="img/boutiquefemme.jpg" alt="">
				</article>

				<article class="boutique-bottom-right">
					<img src="img/boutiqueautre.jpg" alt="">
				</article>

				<div class="boutique-top-left">
                    <a href="">
                        <div class="wrapper">
                            <img src="img/boutique2019.jpg" alt="boutique 2019">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="boutique 2019 article">
                            </div>
                        </div>
                    </a>
				</div>

				<div class="boutique-top-right">
                    <a href="">
                        <div class="wrapper">
                            <img src="img/boutiquechaussettes.jpg" alt="Bien dans vos chaussettes">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="Bien dans vos chaussettes produits">
                            </div>
                        </div>
                    </a>
				</div>
			</div>

			<div class="bottom-boutique">
				<div class="boutique-bottom-left">
                    <a href="">
                        <div class="wrapper">
                            <img src="img/boutiquehomme.jpg" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="produit 1">
                            </div>
                        </div>
                    </a>
				</div>

				<div class="boutique-bottom-mid">
                    <a href="">
                        <div class="wrapper">
                            <img src="img/boutiquefemme.jpg" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="produit 2">
                            </div>
                        </div>
                    </a>
				</div>

				<div class="boutique-bottom-right">
                    <a href="">
                        <div class="wrapper">
                            <img src="img/boutiqueautre.jpg" alt="">
                            <div class="info">
                                <img src="img/article-top-left.png" alt="produit 3">
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