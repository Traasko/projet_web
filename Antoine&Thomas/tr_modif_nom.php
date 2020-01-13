<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=inscription_web;charset=utf8', 'root', '');

$id = $_SESSION['id'];
$nom = $_POST['newnom'];

$req = $bdd->prepare('UPDATE user SET nom=:nom WHERE id=:id');
$req->execute(array(
'nom' => $nom,
'id' =>  $id

));

if($req == true){


echo 'Votre NOM a bien été modifié ! Pour prendre en compte vos modification, merci de vous reconnectez';
echo '<a href="deconnexion_siteweb.php"> Déconnexion </a>';
}

else{
	echo "erreur";
}


?>