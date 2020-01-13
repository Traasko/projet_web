<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Modification :Nom</title>
	<link rel="stylesheet" href="css/style_modification_nom.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<!-- HEADER -->

	<header class="container-fluid header">
		<div class="container">
			<a href="###" class="logo">Robert Schuman</a>
			<nav class="menu">
			<button class="btn btn-warning" onclick = "history.back()"> <i class="fas fa-undo-alt"></i> Retour </button>
			</nav>
		</div>
	</header>

	<!-- HEADER -->

	<!-- ABOUT -->

	<div class="modif">
		<form method="POST" action="tr_modif_nom.php">
			Saisir votre nouveau Nom <br><br>
			<input type="text" name="newnom"> <br><br>
			<input type="submit" value="Valider">	
		</form>
	</div>

	<!-- ABOUT -->

</body>
</html>
