<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-light sticky-md-top bg ">
        <div class="container">
          <a class="navbar-brand FG fw-bold fs-2" href="#">
            <img src="../image/logo.jpg" alt="" height="55px" width="60px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" href="inscription.php">INSCRIPTION</a>
              </li>
            
          <li class="nav-item">
                <a class="nav-link" href="liste.php">LISTE D'APPRENANT</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

</header>

    <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
      <img class="img" src="../image/jk.jpg"  alt="">
    </div>
    <div class="col garb">
    
<!-- Début Formulaire D'inscription -->

<br> <br>
    <form  method="POST" action="enregistrement.php">

    <div class="row align-items-start">
    <div class="col">
    <div class="c100 fw-bold">
<label for="nom">Nom : </label><br>
<input type="VARCHAR(20)" id="nom" name="nom">
</div>
    </div>
    <div class="col">
    <div class="c100 fw-bold">
<label for="prenom">Prenom: </label><br>
<input type="VARCHAR(20)" id="prenom" name="prenom">
</div>
    </div>
  </div>

<br><br>
  
  <div class="row align-items-start">
    <div class="col">
    <div class="c100 fw-bold">
<label for="date_de_naissance">Date_de_naissance: </label><br>
<input type="date" id="date_de_naissance" name="date_de_naissance">
</div>
    </div>
    <div class="col">
    <div class="c100 fw-bold">
<label for="genre">Genre : </label><br>
<input type="VARCHAR(20)" id="genre" name="genre">
</div>
    </div>
  </div>

<br><br>

  <div class="row align-items-start"><br>
    <div class="col">
    <div class="c100 fw-bold">
<label for="date_entrée_à_UFR_SDS">Date_d'entree_à_UFR_SDS : </label><br>
<input type="date" id="date_entree_à_UFR_SDS" name="date_entree_à_UFR_SDS">
</div>
    </div>
  </div>

  
<br><br>
  <div class="row align-items-start">
    <div class="col">
    <div class="c100 fw-bold">
<label for="personne_a_prevenir_en_cas_de_besoin">Personne_a_prevenir_en_cas_de_besoin : </label><br>
<input type="VARCHAR(20)" id="personne_a_prevenir_en_cas_de_besoin" name="personne_a_prevenir_en_cas_de_besoin">
</div>
    </div>
  </div>

<br><br>

<div class=c100 id="submit">
<input type="submit" value="Envoyer" name="Envoyer">
</div>
</form>

<!-- Fin Formulaire D'inscription -->

    </div>
  </div>
</div>

<footer>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col nb">
      @copyright by UFR SDS 
    </div>
  </div>
</div>
</footer>
     
 <script src="../script/main.js"></script>
 <script src="../style/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>



</body>
</html>