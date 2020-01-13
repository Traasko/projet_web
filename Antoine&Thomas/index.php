<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style_accueil_no-co.css">
	<link rel="stylesheet" type="js/bootstrap.js">
	<link rel="stylesheet" type="bootstrap.min.js">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>
<body>

	<!-- Header -->

	<header class="container-fluid header">
		<div class="container">
			<a href="index.php" class="logo">Robert Schuman</a>
			<nav class="menu">
			<a href="connexion_siteweb.php" class="btn-connexion"><i class="fas fa-sign-out-alt"></i> Connexion</a>
			<a href="inscription_siteweb.php" class="btn-inscription"><i class="fas fa-pen"></i> Inscription</a>
			</nav>
		</div>
	</header>

	<!-- Header -->

	<!-- Banner -->

	<div id="carouselExemple" class="carousel slide" data-ride="carousel" data-interval="5000">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/img1.png" class="d-block">
			</div>

			<div class="carousel-item">
				<img src="img/img2.png" class="d-block">
			</div>

			<div class="carousel-item">
				<img src="img/img3.png" class="d-block">
			</div>
		</div>
		<a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
			<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
			<span class="sr-only">Previous</span>
		</a>

		<a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
			<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<span class="sr-only">Next</span>
		</a>
	</div>



	<script>
		$('.carousel').carousel({
			pause: "null"
		})
	</script>

	<!-- Banner -->

	<!-- About -->

	<section class="container-fluid about">
		<div class="container">
			<div class="row">
			  <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title"><i class="fas fa-graduation-cap"></i> Formations</h4>
			        <p class="card-text">Cliquez pour accéder à nos formations proposées.</p>
			        <a href="formation_presentation.php" class="btn btn-custom"><i class="fas fa-graduation-cap"></i> Formations</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title"><i class="fas fa-info-circle"></i> Informations diverses</h4>
			        <p class="card-text">Accès aux documents administratif et à l'agenda du lycée.</p>
			        <a href="info_no-co_siteweb.php" class="btn btn-custom"><i class="fas fa-info-circle"></i> Informations diverses</a>
			      </div>
			    </div>
			  </div>
			   <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title"><i class="fas fa-feather-alt"></i> Relations entreprises</h4>
			        <p class="card-text">Accès aux calendriers d'alternance et voir les offres des entreprises.</p>
			        <a href="#" class="btn btn-custom"><i class="fas fa-feather-alt"></i> Relations entreprises</a>
			      </div>
			    </div>
			  </div>
			   <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title"><i class="fas fa-heart"></i> Vie de l'établissement</h4>
			        <p class="card-text">Accès aux différentes sorties scolaires et projets réalisés.</p>
			        <a href="vie-etablissement_siteweb.php" class="btn btn-custom"><i class="fas fa-heart"></i> Vie de l'établissement</a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</section>

	<section class="container-fluid important">
		<div class="container">
			<div class="row">
			  <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
			  	<div class="card text-center">
				  <div class="card-header">
				    <i class="fas fa-exclamation-triangle"></i> IMPORTANT <i class="fas fa-exclamation-triangle"></i>
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Vous n'êtes actuellement pas connecter !</h5>
				    <p class="card-text">Vous n'aurez pas accès à l'intégralité des documents</p>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</section>

	<!-- About -->

	<!-- Footer -->

	<footer class="pieds">
	  <div class="container">
	    <div class="row">
	    		<div class="contact-info">
	    			<div class="info">
	    				<i class="info-icon fas fa-envelope"></i>
	    				<p>administration@lyceerobertschuman.com</p>
	    			</div>
	    			<div class="info">
	    				<i class="info-icon fas fa-phone"></i>
	    				<p>01 48 37 74 26</p>
	    			</div>
	    			<div class="info">
	    				<i class="info-icon fas fa-map-marker-alt"></i>
	    				<p>5 avenue du Général de Gaulle - 93440 Dugny</p>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	  </div>
	  <div class="Copyright">
	    <a href="###">© 2019 Copyright: RobertSchumanDugny</a>
	  </div>
	</footer>

	<!-- Footer -->
</body>
</html>
