<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste d'apprenant</title>
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
<header>

<nav class="navbar navbar-expand-lg navbar-light sticky-md-top bg ">
        <div class="container">
          <a class="navbar-brand FG fw-bold fs-2" href="#">
            <img src="image/logo.jpg" alt="" height="55px" width="60px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link" href="index.php">INSCRIPTION</a>
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
    <div class="col gt fs-2 fw-bold">
      LISTE D'APPRENANT

      <table class="tableau fs-5 ta ">
<tr >
    <th class="gb">Nom</th>
    <th class="gb">Prenom</th>
    <th class="gb">Date de naissance</th>
    <th class="gb">Genre</th>
    <th class="gb">Date d'entrée</th>
    <th class="gb">Personne à prevenir</th>  
</tr>
<?php
require'connexion.php';

$query = "SELECT * FROM ufr_sds";
$stmt = $conn->query($query);
while($row = $stmt->fetch()){
    echo"<tr>";   
        echo"<td>".$row['nom']."</td>";
        echo"<td>".$row['prénom']."</td>";
        echo"<td>".$row['date_de_naissance']."</td>";
        echo"<td>".$row['genre']."</td>";
        echo"<td>".$row['date_dentrée']."</td>";
        echo"<td>".$row['personne_à_prévenir']."</td>";
    echo "</tr>";  
};
?>
</table>








    </div>   
  </div>
</div>



    <footer>
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col nb">
    <p &copy> @copyright by UFR SDS 
    </div>
  </div>
</div>
    </footer>
</body>
</html>