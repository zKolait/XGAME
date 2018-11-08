<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Notre marque</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/marque.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="jquery/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

	<body>
		<div class="container">

		<?php include 'includes/header.php' ?>

		<main>
            <div class="content">
                <div class="title-center">
                    <h2><span>Notre marque</span></h2>
                </div>

                <section data-aos="fade-up-right" class="section-performance">
                    <img class="img-section" src="img/performance.jpg" alt="performance">
                    <div class="performance-p">
                        <p>Snowset c’est la performance<br> de la chaussette. Sa coupe et ses<br> composants assurent un excellent maintien<br> qui sublimera vos performances. Snowset<br> accompagne les amateurs de sensations fortes,<br> passionés par le sport.</p>
                    </div>
                </section>

                <section data-aos="fade-up-left" class="section-confort">
                    <img class="img-section" src="img/confort.jpg" alt="confort">
                    <div class="confort-p">
                        <p>Snowset c'est également le confort.<br> Pas de confort, pas de plaisir, pas de<br> performance. L'atout  numéro 1 de Snowset<br> c'est le rembourage situé aux talons et aux<br> tibias mais également l'aération exceptionnelle<br> du tissu, qui préserve du froid tout en aérant la<br> plante du pied.</p>
                    </div>
                </section>

                <section data-aos="fade-up-right" class="section-originalite">
                    <img class="img-section" src="img/originalite.jpg" alt="originalite">
                    <div class="originalite-p">
                        <p>Confort et performance n'empêchent pas<br> esthétisme et originalité ! C'est pourquoi<br> Snowset est la toute première marque liée<br> aux sports d'hivers à se soucier du style de ses<br> chaussettes. Tout sportif a le droit d'être coquet,<br> les chaussettes Snowset c'est la touche finale de votre look et rend vos flips et vos grabs encore plus stylés.</p>
                    </div>
                </section>
            </div>

            <button class="topBtn"><i class="fas fa-arrow-circle-up"></i></button>
        </main>

		<?php include 'includes/footer.php' ?>

		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="jquery/aos.js"></script>
	<script>
		AOS.init({
			duration: 2000,
		});
	</script>
    <script type="text/javascript" src="js/script.js"></script>
	</body>
</html>