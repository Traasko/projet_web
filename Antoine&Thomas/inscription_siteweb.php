<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style_inscription_siteweb.css">
</head>
<body>

		<div class="signup-form">
			<form action="traitement_inscription_siteweb.php" method="POST">
				<h1>Inscription</h1>
				<input type="text" placeholder="Nom" class="txtb" name="nom">
				<input type="text" placeholder="Prénom" class="txtb" name="prenom">
				<input type="text" placeholder="Mail" class="txtb" name="mail">
				<input type="text" placeholder="Login" class="txtb" name="login">
				<input type="password" placeholder="Mot de passe" class="txtb" name="pwd">
				</select>


				<input type="submit" value="Inscription" class="signup-btn">
				<a href="connexion_siteweb.php">J'ai déjà un compte</a>
			</form>
		</div>
</body>
</html>
