<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$login=$_POST['login'];
$pwd=md5($_POST['pwd']);

try{
$bdd= new PDO('mysql:host=localhost;dbname=inscription_web;charset=utf8','root','');
}
catch(Exception $e)
{
  die('Erreur:'.$e->getMessage());
}
$req = $bdd->prepare('INSERT into user (nom, prenom, mail, login, pwd, type) VALUES(?,?,?,?,?,?)');
$req -> execute(array($nom, $prenom, $mail, $login, $pwd, $type));

header("location:connexion_siteweb.php");

?>
