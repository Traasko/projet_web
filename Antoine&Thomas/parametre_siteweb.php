<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Paramètre</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style_parametre_siteweb.css">
</head>
<body>

	<!-- Header -->

	<header class="container-fluid header">
		<div class="container">
			<a href="###" class="logo">Robert Schuman</a>
			<nav class="menu">
			<button class="btn btn-warning" onclick = "history.back()"> <i class="fas fa-undo-alt"></i> Retour </button>
			</nav>
		</div>
	</header>

	<!-- Header -->

	<!-- About -->

	<section class="container-fluid about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
					<div class="title">
					<h1>Bonjour <?php  echo $_SESSION['login']; ?> !</h1>
					<h2>Quel action souhaitez-vous effectuer ?</h2>
					</div>
				</div>	
			</div>
		</div>
	</section>

	<div class="choix">
		<div class="row">
		  <div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Votre Nom</h5>
		        <p class="card-text"><?php echo $_SESSION['nom']; ?></p>
		        <a href="modification_nom.php" class="btn btn-primary">Modifier</a>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Votre Prénom</h5>
		        <p class="card-text"><?php echo $_SESSION['prenom']; ?></p>
		        <a href="modification_prenom.php" class="btn btn-primary">Modifier</a>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Votre e-mail</h5>
		        <p class="card-text"><?php echo $_SESSION['mail']; ?></p>
		        <a href="midification_mail.php" class="btn btn-primary">Modifier</a>
		      </div>
		    </div>
		  </div>
		  <div class="col-sm-6">
		    <div class="card">
		      <div class="card-body">
		        <h5 class="card-title">Votre Mot de Passe</h5>
		        <p class="card-text"><?php echo $_SESSION['pwd']; ?></p>
		        <a href="#" class="btn btn-primary">Modifier</a>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

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