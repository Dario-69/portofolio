<?php

  //DB Config
  require_once '../../config/index.php';

  if(isset($_GET['id'])){

    $id = $_GET['id'];

    if(empty($id)) {
				
		if(empty($name)) {
			error_log("<font color='red'>Collection ID is not set</font><br/>");
		}
	}else{

        $sql = "SELECT * FROM `proprietes` WHERE id = '".$id."'";

        $sth = $pdo->prepare($sql);
        $sth->execute();
  
        $propriete = $sth->fetch(PDO::FETCH_ASSOC);

    }

  }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Nos services - Elwinakof</title>
</head>
<body>

    <!-- Navigation -->
    <div id="myNav" class="overlay">

            <div class="container">

                <div class="row mt-5">

                    <div class="col-md-4 col-5">

                        <a href="../../index.php"><h1 id="logo_2">ELWINAKOF</h1></a>

                    </div>

                    <div class="col-md-8 col-7 text-right">

                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">fermer &times;</a>

                    </div>

                </div>

                <div class="row mt-5">

                    <div class="col-md-6" id="MyNavA">

                        <a href="../../les-proprietes/index.php">Les propriétés</a>

                        <a href="../../nos-services/index.php">Nos services</a>

                        <a href="../../a-propos-de-nous/index.php">à propos de nous</a>

                        <a href="../../contact/index.php">Contact</a>

                    </div>

                </div>

            </div>

    </div>

    <div class="container-fluid" id="navbar">

        <div class="row mt-2 mb-2">

            <div class="col-md-4 col-3">

                <a href="../../index.php"><h1 id="logo">ELWINAKOF</h1></a>

            </div>

            <div class="col-md-6 col-6"></div>

            <div class="col-md-2 col-3" id="header_actions">

                <a href="../../les-proprietes/index.php" id="lesproprietes">Les propriétés</a>

                <div class="button_container" onclick="openNav()">

                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>

                </div>

            </div>

        </div>

    </div>
    
    <div class="content">

        <div class="container-fluid" style="height: 100vh; padding: 0; overflow: hidden;">

            <div class="row">

                <div class="col-md-12 text-center">

                    <img src="../../admin/dashboard/uploads/cover/<?php echo $propriete['cover']; ?>" alt="" style="height: 100vh !important; width: 100%">

                </div>


            </div>

        </div>

        <div class="container mt-5">

            <div class="row">

                <div class="col-md-12">

                    <span class="type_prop"><?= $propriete['type_prop'];?></span>

                    <span class="statut_prop"><?= $propriete['etat_prop'];?></span>

                    <h1 class="nom_prop"><?= $propriete['nom'];?></h1>

                    <span class="location_pop"><?= $propriete['localisation'];?></span>

                    <span class="location_pop"><?= $propriete['adresse'];?></span>

                    <h3 class="prix_prop"><?= $propriete['price'];?> FCFA</h3>

                    <p><?= $propriete['desc'];?></p>

                </div>

            </div>

            <div class="row mt-3">

                <div class="col-md-6">

                    <img src="../../admin/dashboard/uploads/gallery/<?php echo $propriete['image_uno']; ?>" alt="" style="height: 50vh !important; width: 100%">

                </div>

                <div class="col-md-6">

                    <img src="../../admin/dashboard/uploads/gallery/<?php echo $propriete['image_dos']; ?>" alt="" style="height: 50vh !important; width: 100%">

                </div>

            </div>

            <div class="row mt-3">

                <div class="col-md-6">

                    <img src="../../admin/dashboard/uploads/gallery/<?php echo $propriete['image_trio']; ?>" alt="" style="height: 50vh !important; width: 100%">

                </div>

                <div class="col-md-6">

                    <img src="../../admin/dashboard/uploads/gallery/<?php echo $propriete['image_quatro']; ?>" alt="" style="height: 50vh !important; width: 100%">

                </div>

            </div>

            <div class="row mt-5 mb-5">

                <div class="col-md-12 text-center">

                    <a href="tel:+22890231712" class="btnt startbtn2 animate__animated animate__fadeIn">Contactez nous</a>

                </div>

            </div>

        </div>

    </div>

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <h3>Elwinakof</h3>

                </div>

                <div class="col-md-3"></div>

                <div class="col-md-3 text-right">

                    <h3>Compagnie</h3>

                    <a href="../../nos-services/index.php">Nos services</a> <br>

                    <a href="../../contact/index.php">Nous Contactez</a> <br>

                    <a href="../../a-propos-de-nous/index.php">À propos de nous</a>

                </div>

                <div class="col-md-3 text-right">

                    <h3>Nos liens</h3>

                    <a href="../../faq/index.html">FAQ</a> <br>

                    <a href="../../politique/index.html">Politique</a> <br>

                    <a href="../../condition/index.html">Condition</a> 

                </div>

            </div>

        </div>

    </footer>

    <script>

        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '.splide', {
                type: 'loop',
                pagination: false,
                height: '50vh',
                arrows: false,
                autoplay: true,
            } ).mount();

        } );

        /* Open */
        function openNav() {
        document.getElementById("myNav").style.height = "100%";
        }

        /* Close */
        function closeNav() {
        document.getElementById("myNav").style.height = "0%";
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>