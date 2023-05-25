<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Web</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body >
    
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
                <a class="nav-link" href="Page/inscription.php">INSCRIPTION</a>
              </li>
            
          <li class="nav-item">
                <a class="nav-link" href="Page/liste.php">LISTE D'APPRENANT</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

</header>

<div class="container text-center body">
  <div class="row align-items-start">
    <div class="col fs-1 fw-bold text-start" >
      UFR SDS
    </div>
  </div>
<br><br><br><br><br><br><br>
  <div class="row align-items-start">
    <div class="col text-end ">
    <a href="Page/liste.php"><button type="button" class="btn btn-dark fs-5 bt fw-bolder">LISTE D'APPRENANT</button></a>
    </div>
    <div class="col text-start ">
   <a href="Page/inscription.php"><button type="button" class="btn btn-dark fs-5 bt fw-bolder ">INSCRIPTION</button></a> 
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


 <script src="script/main.js"></script>
 <script src="style/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
</body>
</html>