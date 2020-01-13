<!DOCTYPE html>
<html lang="fr">​
<head>​
<title>Modification du compte</title>​
<meta charset="UTF-8">​
<meta name="viewport" content="width=device-width, initial-scale=1">​
<!--===============================================================================================-->​
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>​
<!--===============================================================================================-->​
<link rel="stylesheet" type="text/css" href="modif/vendor/bootstrap/css/bootstrap.min.css">​
<!--===============================================================================================-->​
<link rel="stylesheet" type="text/css" href="modif/fonts/font-awesome-4.7.0/css/font-awesome.min.css">​
<!--===============================================================================================-->​
<link rel="stylesheet" type="text/css" href="modif/vendor/animate/animate.css">​
<!--===============================================================================================-->​
<link rel="stylesheet" type="text/css" href="modif/vendor/css-hamburgers/hamburgers.min.css">​
<!--===============================================================================================-->​
<link rel="stylesheet" type="text/css" href="modif/vendor/select2/select2.min.css">​
<!--===============================================================================================-->​
<link rel="stylesheet" type="text/css" href="modif/css/util.css">​
<link rel="stylesheet" type="text/css" href="modif/css/main.css">​
<!--===============================================================================================-->​
</head>​
<body>​
​
<div class="bg-contact3" style="background-image: url('modif/images/bg-01.jpg');">​
<div class="container-contact3">​
<div class="wrap-contact3">​
<form action="traitement_compte.php"  method="post" class="contact3-form validate-form">​
<span class="contact3-form-title">​
Formulaire de modification​
</span>​
​
​
​
<div class="wrap-input3 validate-input" data-validate="Name is required">​
<input class="input3" type="text" name="id" placeholder="Votre identifiant">​
<span class="focus-input3"></span>​
</div>​
​
<div>​
<p> Veuillez réaliser les modifications que vous souhaitez.<br/> </p>​
<span class="focus-input3"></span>​
</div>​
​
<div class="wrap-input3 validate-input">​
<br/><input class="input3" type="text" name="Nom" placeholder="Votre nom">​
<span class="focus-input3"></span>​
</div>​
​
                 <div class="wrap-input3 validate-input">​
<input class="input3" type="text" name="Prenom" placeholder="Votre prénom">​
<span class="focus-input3"></span>​
 </div>​
​
<div class="wrap-input3 validate-input" data-validate = "Veuillez saisir une adresse correcte: ex@abc.xyz">​
<input class="input3" type="text" name="Email" placeholder="Votre email">​
<span class="focus-input3"></span>​
</div>​
​
 <div class="wrap-input3 validate-input">​
<input class="input3" type="password" name="Mdp" placeholder="Votre mot de passe">​
<span class="focus-input3"></span>​
 </div>​
​
<div class="wrap-contact3-form-radio">​
<select class="input3">​
<option value="choix1">Eleve </option>​
<option value="choix2">Parents </option>​
</select>​
</div>​
​
​
<div class="container-contact3-form-btn">​
<center><button class="contact3-form-btn">​
Modifier​
</center></button>​
</div>​
</div>​
</form>​
</div>​
</div>​
</div>​
​
​
<div id="dropDownSelect1"></div>​
​
<!--===============================================================================================-->​
<script src="modif/vendor/jquery/jquery-3.2.1.min.js"></script>​
<!--===============================================================================================-->​
<script src="modif/vendor/bootstrap/js/popper.js"></script>​
<script src="modif/vendor/bootstrap/js/bootstrap.min.js"></script>​
<!--===============================================================================================-->​
<script src="modif/vendor/select2/select2.min.js"></script>​
<script>​
$(".selection-2").select2({​
minimumResultsForSearch: 20,​
dropdownParent: $('#dropDownSelect1')​
});​
</script>​
<!--===============================================================================================-->​
<script src="/modif/main.js"></script>​
​
<!-- Global site tag (gtag.js) - Google Analytics -->​
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>​
<script>​
  window.dataLayer = window.dataLayer || [];​
  function gtag(){dataLayer.push(arguments);}​
  gtag('js', new Date());​
​
  gtag('config', 'UA-23581568-13');​
</script>​
​
</body>​
</html>​