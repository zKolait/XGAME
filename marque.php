<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Notre marque</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/marque.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="jquery/aos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

	<body>
		<div class="container">

		<?php include 'includes/header.php' ?>

		<main>
			<div class="title-center">
				<h2><span>Notre marque</span></h2>
			</div>
		</main>

		<section data-aos="fade-up-right" class="section-performance">
			<img src="img/performance.jpg" alt="performance">
			<div class="performance-p">
				<p>Snowset c’est la performance<br> de la chaussette. Sa coupe et ses<br> composants assurentun excellent maintien<br> qui sublimera vos performances. Snowset<br> accompagne les amateurs de sensations fortes,<br> passionés par le sport.</p>
			</div>
		</section>

		<section data-aos="fade-up-left" class="section-confort">
			<img src="img/confort.jpg" alt="confort">
			<div class="confort-p">
				<p>Snowset c’est la performance de la chaussette. Sa coupe et ses composants assurentun excellent maintien qui sublimera vos performances. Snowset accompagne les amateurs de sensations fortes, passionés par le sport.</p>
			</div>
		</section>

		<section data-aos="fade-up-right" class="section-originalité">
			<img src="img/originalite.jpg" alt="originalite">
			<div class="originalité-p">
				<p>Snowset c’est la performance de la chaussette. Sa coupe et ses composants assurentun excellent maintien qui sublimera vos performances. Snowset accompagne les amateurs de sensations fortes, passionés par le sport.</p>
			</div>
		</section>


		<?php include 'includes/footer.php' ?>

		</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="jquery/aos.js"></script>
	<script type="text/javascript">
		AOS.init({
			duration: 2000,
		});
	</script>
	</body>
</html>