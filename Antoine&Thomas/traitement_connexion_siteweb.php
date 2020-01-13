<?php
session_start ();

try{
$bdd= new PDO('mysql:host=localhost;dbname=inscription_web;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

$reponse=$bdd->prepare('SELECT * FROM user WHERE login=:login AND pwd=:pwd');
$reponse->execute(array(
'login'=>$_POST['login'],
'pwd'=>md5($_POST['pwd'])));
$donne=$reponse->fetch();

var_dump($donne);

if (isset($_POST['login']) && isset($_POST['pwd'])) {

  if ($donne['login'] == $_POST['login'] && $donne['pwd'] == md5($_POST['pwd'])) {

    $_SESSION['login'] = $donne['login'];
    $_SESSION['nom'] = $donne['nom'];
    $_SESSION['prenom'] = $donne['prenom'];
    $_SESSION['mail'] = $donne['mail'];
    $_SESSION['pwd'] = $donne['pwd'];
    $_SESSION['id'] = $donne['id'];

    header ('location: accueil_co.php');

  }
  else {
    echo '<body onLoad="alert(\'Nope\')">';

    echo '<meta http-equiv="refresh" content="0;URL=connexion_siteweb.php">';
  }
}
else {
  echo 'Veuillez remplir les champs vides';
}

?>
