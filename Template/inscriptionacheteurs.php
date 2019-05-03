<!DOCTYPE html>
<html lang="en">

<head>



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Amazon ECE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css"/>
    <link href="cssinscription.css" rel="stylesheet" type="text/css"/>
  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</head>

<body>

 <!-- Navigation -->
  <nav class="navbar  navbar-expand-lg navbar-grey fixed-top">
    <div class="container">
        <h3 class="text-uppercase white mb-0">Amazon'ECE</h3>
      <!--<a class="navbar-brand amazon1" href="#"><div class="ama"><b>Amazon ECE </b><img src="Logo_ECE_Paris.png" width="100" height="80"></div> 
      </a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">

             <div class="dropdown">
              <button class="btn nav-link dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="bar">
               Catégorie<ion-icon name="clipboard"></ion-icon></div>

              </button>

            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">

              <a class="dropdown-item " href="#"><div class="ba">Livres <ion-icon name="book"></ion-icon></div></a>

              <a class="dropdown-item" href="#"><div class="ba">Musiques <ion-icon name="volume-high"></ion-icon></div></a>

              <a class="dropdown-item" href="#"><div class="ba">Sports et loisirs <ion-icon name="basketball"></ion-icon></div></a>

              <a class="dropdown-item" href="#"><div class="ba">Vetements <ion-icon name="woman"></ion-icon></ion-icon></div></a>
              <div class="dropdown-divider"></div>

            </div>
          </div> 
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Top ventes<ion-icon name="bookmark"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Vendre<ion-icon name="briefcase"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Votre compte<ion-icon name="person"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Panier<ion-icon name="cart"></ion-icon></div></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><div class="bar">Admin<ion-icon name="school"></ion-icon></div></a>
          </li>
          




        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Enregistrez-vous</h5>
            <form class="form-signin" action="InscriptionAcheteur.php" method="post">

              <br>
              <hr>
              <div class="form-label-group">
                <input type="text" name="Prenom" class="form-control" placeholder="Prénom" required autofocus>
                <label for="Prenom"></label>
              </div>

              <div class="form-label-group">
                <input type="text" name="Nom" class="form-control" placeholder="Nom" required autofocus>
                <label for="Nom"></label>
              </div>


              <div class="form-label-group">
                <input type="email" name="inputEmail" class="form-control" placeholder="Adresse Email" required>
                <label for="inputEmail"></label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="text" name="Login" class="form-control" placeholder="Login" required>
                <label for="Login"></label>
              </div>


              <div class="form-label-group">
                <input type="password" name="inputPassword" class="form-control" placeholder="Mot de passe" required>
                <label for="inputPassword"></label>
              </div>
              
              <div class="form-label-group">
                <input type="password" name="inputConfirmPassword" class="form-control" placeholder="Confirmez votre mot de passe" required>
                <label for="inputConfirmPassword"></label>
              </div>

              <hr>
              <h6 class="text-center"> Coordonnées</h6>

              <div class="form-label-group">
                <input type="adress" name="inputadress" class="form-control" placeholder="Adresse" required>
                <label for="inputadress"></label>
              </div>

              <div class="form-label-group">
                <input type="adress" name="inputadress2" class="form-control" placeholder="Adresse" required>
                <label for="inputadress2"></label>
              </div>


              <div class="form-label-group">
                <input type="ville" name="inputville" class="form-control" placeholder="Ville" required>
                <label for="inputville"></label>
              </div>

              <div class="form-label-group">
                <input type="codepostale" name="inputcodepostale" class="form-control" placeholder="Code postale" required>
                <label for="inputcodepostale"></label>
              </div>

              <div class="form-label-group">
                <input type="pays" name="inputpays" class="form-control" placeholder="Pays" required>
                <label for="inputpays"></label>
              </div>

              <br>

              <div class="form-label-group">
                <input type="tel" name="inputel" class="form-control" placeholder="Numéro de téléphone" required>
                <label for="inputel"></label>
              </div>

              <hr>

              <h6 class="text-center"> Paiement</h6>


                <select name=inputtypecarte class=form-control>
                  <option value=Typecarte>Type de carte</option>
                 <option value=visa>Visa</option>
                 <option value=mastercard>Mastercard</option>
                </select>

                <br>

               <div class="form-label-group">
                <input type="Numerocarte" name="inputnumerocarte" class="form-control" placeholder="Numéro de carte" required>
                <label for="inputnumerocarte"></label>
              </div>

               <div class="form-label-group">
                <input type="Nomcarte" name="inputnomcarte" class="form-control" placeholder="Nom" required>
                <label for="inputnomcarte"></label>
              </div>

               <div class="form-label-group">
                <input type="Date" name="inputdate" class="form-control" placeholder="Date d'expiration" required>
                <label for="inputdate"></label>
              </div>

               <div class="form-label-group">
                <input type="Crypto" name="inputcrypto" class="form-control" placeholder="Cryptogramme" required>
                <label for="inputcrypto"></label>
              </div>



              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enregistrer</button>
              <a class="d-block text-center mt-2 small" href="acheteur_login.php">S'identifer</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="py-3 navbar-gre">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
