<?php

  //DB Config
  require_once '../config/index.php';

  $q = "SELECT * FROM proprietes";

  $sth = $pdo->prepare($q);
  $sth->execute();
  $proprietes = $sth->fetchAll();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <title>Les propriétés - Elwinakof</title>
</head>
<body>

    <!-- Navigation -->
    <div id="myNav" class="overlay">

            <div class="container">

                <div class="row mt-5">

                    <div class="col-md-4 col-5">

                        <a href="../index.php"><h1 id="logo_2">ELWINAKOF</h1></a>

                    </div>

                    <div class="col-md-8 col-7 text-right">

                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">fermer &times;</a>

                    </div>

                </div>

                <div class="row mt-5">

                    <div class="col-md-6" id="MyNavA">

                        <a href="#">Les propriétés</a>

                        <a href="../nos-services/index.php">Nos services</a>

                        <a href="../a-propos-de-nous/index.php">à propos de nous</a>

                        <a href="../contact/index.php">Contact</a>

                    </div>

                </div>

            </div>

    </div>

    <div class="container-fluid" id="navbar">

        <div class="row mt-2 mb-2">

            <div class="col-md-4 col-3">

                <a href="../index.php"><h1 id="logo">ELWINAKOF</h1></a>

            </div>

            <div class="col-md-6 col-6"></div>

            <div class="col-md-2 col-3" id="header_actions">

                <a href="#" id="lesproprietes">Les propriétés</a>

                <div class="button_container" onclick="openNav()">

                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>

                </div>

            </div>

        </div>

    </div>
    
    <div class="content">

        <div class="container-fluid" id="prop">

            <div class="container">
    
                <div class="row">
    
                    <div class="col-md-12 text-center">
    
                        <h1 id="who" class="animate__animated animate__fadeIn">Les propriétés</h1>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>

        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-md-6">

                    <div class="filter-option">

                        <div class="row">

                            <div class="col-md-3">

                                <span>Trouvez votre maison</span>

                            </div>

                            <div class="col-md-3">

                                <select name="" id="" class="seleect">

                                    <option value="">Type</option>
        
                                </select>
        
                            </div>

                            <div class="col-md-3" id="incompetente">

                                <select name="" id="" class="seleect">
        
                                    <option value="">Locatisation</option>
        
                                </select>
        
                            </div>

                            <div class="col-md-3" id="incompetente">

                                <select name="" id="" class="seleect">
        
                                    <option value="">Statuts</option>
        
                                </select>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-6" id="incompetente">

                    <div class="search">

                        <input type="search" name="" id="" class="searchTerm">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <?php foreach ($proprietes as $propriete): ?>

                    <div class="col-md-3">

                        <a href="infos/index.php?id=<?= $propriete['id'];?>">

                            <img src="../admin/dashboard/uploads/cover/<?php echo $propriete['cover']; ?>" alt="" width="100%">

                            <span class="type_prop"><?= $propriete['type_prop'];?></span>

                            <h2 class="nom_prop"><?= $propriete['nom'];?></h2>

                            <span class="location_pop"><?= $propriete['localisation'];?></span>

                        </a>

                    </div>

                <?php endforeach ?>    

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

                    <a href="../nos-services/index.php">Nos services</a> <br>

                    <a href="../contact/index.php">Nous Contactez</a> <br>

                    <a href="../a-propos-de-nous/index.php">À propos de nous</a>

                </div>

                <div class="col-md-3 text-right">

                    <h3>Nos liens</h3>

                    <a href="../faq/index.html">FAQ</a> <br>

                    <a href="../politique/index.html">Politique</a> <br>

                    <a href="../condition/index.html">Condition</a> 

                </div>

            </div>

        </div>

    </footer>

    <script>

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