<?php

// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=projet-web;charset=utf8', 'root', '');

$Nom = $_POST['Nom'];
$Prenom = $_POST['Prenom'];
$Email = $_POST['Email'];
$Mdp = $_POST['Mdp'];
$Role = $_POST['Role'];


$b = $req = $bdd->prepare('UPDATE utilisateur SET Nom = :Nom, Prenom = :Prenom, Email = :Email, Mdp = :Mdp, Role = :Role ');
$a = $req->execute(array(
'Nom' => $Nom,
'Prenom' => $Prenom,
'Email' => $Email,
'Mdp' => $Mdp,
'Role' => $Role

));



echo 'Votre compte a bien été modifié ! ';
echo '<a href="accueil.php"> accueil </a>';
?>
