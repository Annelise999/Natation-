<!DOCTYPE html>
<html lang="en">

<head>

  <?php 
session_start();
$database = "Projet";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);
?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Amazon ECE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="fond.css" type="text/css" media="screen"/>

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand amazon1" href="index.php"> Amazon ECE  
        <img src="Logo_ECE_Paris.png" width="110" height="30"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
             <div class="dropdown">
              <button class="btn nav-link dropdown-toggle active" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Catégorie<ion-icon name="clipboard"></ion-icon>

              </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

              <a class="dropdown-item" href="Livres.php">Livres <ion-icon name="book"></ion-icon></a>

              <a class="dropdown-item" href="Musique.php">Musiques <ion-icon name="volume-high"></ion-icon></a>

              <a class="dropdown-item" href="Sports&Loisirs.php">Sports et loisirs <ion-icon name="basketball"></ion-icon></a>

              <a class="dropdown-item" href="Vetements.php">Vetements <ion-icon name="woman"></ion-icon></ion-icon></a>

            </div>
          </div> 
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="topventes.php">Top ventes<ion-icon name="bookmark"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="vendeur_login.php">Vendre<ion-icon name="briefcase"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="acheteur_login.php">Votre compte<ion-icon name="person"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="panier.php">Panier<ion-icon name="cart"></ion-icon></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin_login.php">Admin<ion-icon name="school"></ion-icon></a>
          </li>
          <img src="profil.png" width="30" height="30">






        </ul>
        
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">



<?php
if ($db_found) 
{


  
  $id= $_SESSION ['ID'];



    $sql = "SELECT * FROM Admin WHERE ID = $id";


 $result = mysqli_query($db_handle, $sql);

      
        while ($data = mysqli_fetch_assoc($result)){
        
    //end while

?>
              <div class="col-md-12">
                <center>
                  <br><br><br>
                 <img src= <?php echo $data[Photo] ?> name="aboutme" width="200" height="200" class="arrondie">
                  

                  <div class="couleur text-center"> <?php echo $data['Prenom'] ?> <ion-icon name="checkmark-circle-outline"></ion-icon></div>
                </center>
              </div>

      <?php   }
        }

 else {
        echo "Database not found";
    }//end else
    //fermer la connection
    mysqli_close($db_handle);
           ?>



                    <div class="col-lg-12">

        <br><br><br>
        <div class="list-group center-block">
          <a href="Interfaceadmin.php" class="list-group-item couleur1 text-center">Mon compte</a>
          <a href="Listevendeurs.php" class="list-group-item couleur1 text-center active">Liste des vendeurs</a>
          <a href="Listearticles.php" class="list-group-item couleur1 text-center">Liste des articles</a>
          <a href="ajoutvendeuradmin.php" class="list-group-item couleur1 text-center">Ajouter un vendeur</a>
          <a href="ajoutarticleadmin.php" class="list-group-item couleur1 text-center">Ajouter un article</a>
        </div>


      </div>

      <div class="col-lg-12">

        <br><br><br>

        <div class="row">
<?php
session_start();


    //identifier le nom de base de données
    $database = "Projet";
    //connectez-vous dans votre BDD
    //Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
    $db_handle = mysqli_connect('localhost', 'root', 'root' );
    $db_found = mysqli_select_db($db_handle, $database);

       //declaration des variables


    if ($db_found) {

        $sql = "SELECT * FROM Vendeur " ;
        $result = mysqli_query($db_handle, $sql);

      
        while ($data = mysqli_fetch_assoc($result)){
        


     ?>

    
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"> <br>  <center>
                <img src= <?php echo $data[Photo]  ?> name="aboutme" width="200" height="200" > </center>
              </a>
              <div class="card-body">
                <center>
                <h5><?php echo $data['Nom'] . " " . $data['Prenom'] ;?> </h5>

              </center>
              </div>
            
              <form action="SupprimerVendeur.php" method="post">
                  <table>
                  

             <td> <input type="hidden" name="IDVendeurchoisi" value= <?php echo $data[ID] ?>> </td>
          

              <div class="card-footer">
                <input class="btn btn-danger" type="submit" value="Supprimer">
              </div>
            
            </table>
                </form>



            </div>
          </div>
 <?php   }
        }
    //end if
    //si le BDD n'existe pas
    else {
        echo "Database not found";
    }//end else
    //fermer la connection
    mysqli_close($db_handle);
           ?>
            
   

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<br><br><br><br><br>
  <!-- Footer -->
  <footer class="py-5 bg-dark">  
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
