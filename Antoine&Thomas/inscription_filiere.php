<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style_inscription_filliere.css">
    <meta charset="utf-8">
    <title>Inscription </title>
  </head>
  <body>

<!-- Header -->

    <!--<header class="container-fluid header">
      <div class="container">
        <a href="##" class="logo">Robert Schuman</a>
        <nav class="menu">
        <button class="btn btn-warning"><i class="fas fa-undo-alt"></i> Retour</button>
        <button class="btn btn-primary"><i class="fas fa-home"></i> Accueil</button>
        </nav>
      </div>
    </header>-->

<!-- Header -->

<!-- About --> 

    <section class="container-fluid about">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <div class="title">
              <h1>Inscription filière</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="choix">
      <select name="choix" class="selechoix">
            <option value="Oui">3EME PREPA PRO</option>
            <option value="Non">BAC PRO SN</option>
            <option value="Non">BAC PRO TU</option>
            <option value="Non">BAC PRO MEI</option>
            <option value="Non">BAC PRO STI2D</option>
            <option value="Non">BTS CPRP</option>
            <option value="Non">BTS SIO SISR</option>
            <option value="Non">BTS SIO SLAM</option>
          </select>
      </div>

      <div class="separateur">
      <p>.......................................................</p>
    </div>
      
    <div class="col1">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <form action="#" method="post">
          <div class="eleve">
            <h2><i class="fas fa-user-graduate"></i> Elève<br></br></h2>
            <input type="text" name="name" placeholder="Nom"/>
            <input type="text" name="name" placeholder="Prénom"/><br>
            <input type="text" name="name" placeholder="E-mail"/>
            <input type="text" name="name" placeholder="Portable"/><br>
            <input type="text" name="name" placeholder="Date de Naissance"/>
            <input type="text" name="name" placeholder="Département de naissance"/><br>
            <input type="text" name="name" placeholder="Ville"/>
            <input type="text" name="name" placeholder="Nationalité"/>
            <div class="bourse">
          </div>
          <p>Boursier</p>
          <select name="parent" class="selec">
            <option value="Oui">Oui</option>
            <option value="Non">Non</option>
          </select>
        </div>
        </form>
      </div>
    </div>
    <div class="separateur">
      <p>.......................................................</p>
    </div>
    <div class="col2">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <form action="#" method="post">
          <h2><i class="fas fa-user-edit"></i> Responsable légal 1<br></br></h2>
          <input type="text" name="name" placeholder="Nom"/>
          <input type="text" name="name" placeholder="Prénom"/><br>
          <input type="text" name="name" placeholder="E-mail"/>
          <input type="text" name="name" placeholder="Portable"/><br>
          <input type="text" name="name" placeholder="Adresse"/>
          <input type="text" name="name" placeholder="Département"/><br>
          <input type="text" name="name" placeholder="Ville"/>
          <input type="text" name="name" placeholder="Numéros Fixe"/><br>
          <input type="text" name="name" placeholder="Numéro travail"/>
          <input type="text" name="name" placeholder="Profession"/>
          
          <p>Lien de parenté</p>
            <select name="parent" class="selec">
              <option value="père">Père</option>
              <option value="mère">Mère</option>
            </select>
          
          
            <p>Enfants à charges</p>
          <select name="parent" class="selec">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option><br></br>
          </select>
        </div>
        </form>
      </div>
    </div>
    <div class="separateur">
      <p>.......................................................</p>
    </div>
        
    <div class="col3">
      <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
        <form action="#" method="post">
          <h2><i class="fas fa-user-edit"></i> Responsable légal 2<br></br></h2>
            <input type="text" name="name" placeholder="Nom"/>
            <input type="text" name="name" placeholder="Prénom"/><br>
            <input type="text" name="name" placeholder="E-mail"/>
            <input type="text" name="name" placeholder="Portable"/><br>
            <input type="text" name="name" placeholder="Adresse"/>
            <input type="text" name="name" placeholder="Département"/><br>
            <input type="text" name="name" placeholder="Ville"/>
            <input type="text" name="name" placeholder="Numéros Fixe"/><br>
            <input type="text" name="name" placeholder="Numéro travail"/>
            <input type="text" name="name" placeholder="Profession"/>
            <div class="lien2">
              <p>Lien de parenté</p>
              <select name="parent" class="selec">
                <option value="père">Père</option>
                <option value="mère">Mère</option>
              </select>
            </div>
            <div class="enfants2">
              <p>Enfants à charges</p>
              <select name="charges" class="selec">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select> <br> <br>
            </div>
        </form>
      </div>
    </div>
    <div class="signup">
     <input type="submit" value="Inscription" class="valider">
   </div>
<!-- About -->

<!-- Footer -->

<!-- Footer -->

  </body>
</html>