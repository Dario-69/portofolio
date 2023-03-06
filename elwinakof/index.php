<?php

  //DB Config
  require_once 'config/index.php';

  $q = "SELECT * FROM proprietes WHERE id IN('1','2','3','4')";

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

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Elwinakof</title>
</head>
<body>

    <!-- Navigation -->
    <div id="myNav" class="overlay">

                <div class="container">

                    <div class="row mt-5">

                        <div class="col-md-4 col-5">

                            <a href="index.html"><h1 id="logo_2">ELWINAKOF</h1></a>

                        </div>

                        <div class="col-md-8 col-7 text-right">

                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">fermer &times;</a>

                        </div>

                    </div>

                    <div class="row mt-5">

                        <div class="col-md-6" id="MyNavA">

                            <a href="les-proprietes/index.php">Les propriétés</a>

                            <a href="nos-services/index.php">Nos services</a>

                            <a href="a-propos-de-nous/index.php">à propos de nous</a>

                            <a href="contact/index.php">Contact</a>

                        </div>

                    </div>

                </div>

    </div>

    <div class="container-fluid animate__animated animate__fadeIn" id="navbar">

        <div class="row mt-2 mb-2">

            <div class="col-md-4 col-3">

                <a href="index.php"><h1 id="logo">ELWINAKOF</h1></a>

            </div>

            <div class="col-md-6 col-6"></div>

            <div class="col-md-2 col-3" id="header_actions">

                <a href="les-proprietes/index.php" id="lesproprietes">Les propriétés</a>

                <div class="button_container" onclick="openNav()">
    
                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>

                </div>

            </div>

        </div>

    </div>

    <div class="content">

        <!-- Debut -->

        <div class="container-fluid" id="starter">

            <div class="container">
    
                <div class="row">
    
                    <div class="col-md-12">
    
                        <h1 id="welcom" class="animate__animated animate__fadeInUp">Votre meilleur choix pour <br>un bien immobilier</h1>

                        <a href="les-proprietes/index.php" class="btnt startbtn1 animate__animated animate__fadeIn">Voir propriétés</a> 

                        <a href="contact/index.php" class="btnt startbtn2 animate__animated animate__fadeIn">Nous appelez</a>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
        <!-- Section2 -->

        <div class="container-fluid" id="tenacity">
    
            <div class="container">
    
                <div class="row">
    
                    <div class="col-md-6">
    
                        <h2>Ténacité & Sagesse</h2>
    
                        <p>Nous sommes une entreprise éprouvée et tournée vers l'avenir. Nous nous concentrons sur l'achat, la vente et la localtion. Nous opérons depuis des années et n'avons pas l'intention de ralentir. Découvrez notre philosophie, notre portefeuille, notre équipe et bien plus encore.</p>
    
                    </div>
    
                    <div class="col-md-6">
    
                    </div>
    
                </div>
    
            </div>
    
        </div>

        <!-- Section du FAQ -->
    
        <div class="container-fluid" id="today">
    
            <div class="container">
    
                <div class="row">
    
                    <div class="col-md-8" id="first">
    
                        <h2>Que peut-on faire pour vous aider aujourd'hui?</h2>
    
                    </div>
    
                </div>

                <div class="row mt-2 text-justify">

                    <div class="col-md-6">

                        <ul>

                            <li><a href="faq/index.html#louer">Je cherche à louer une maison</a></li>

                            <li><a href="faq/index.html#achat">Je cherche à acheter une maison</a></li>

                            <li><a href="faq/index.html#acquisition">Je souhaite m'associer à ELWINAKOF pour une acquisition immobilière</a></li>

                        </ul>

                    </div>

                    <div class="col-md-6">

                        <ul>

                            <li><a href="faq/index.html#vente">J'ai une maison à vendre/ à louer</a></li>

                            <li><a href="faq/index.html#carreer">Je suis intéressé par les opportunités de carrière</a></li>

                            <li><a href="faq/index.html#invest">Je veux investir avec ELWINAKOF</a></li>

                        </ul>

                    </div>

                </div>
    
            </div>
    
        </div>

        <!-- Propriétés en vedette -->

        
    
        <div class="container mt-5" id="vedette">
    
            <div class="row">
    
                <div class="col-md-4">
    
                    <h2>propriétés en vedette</h2>
    
                </div>
    
                <div class="col-md-4"></div>
    
                <div class="col-md-4"></div>
    
            </div>
    
            <div class="row mt-4">
    
                <div class="col-md-6">
    
                    <p class="mb-5">Vous pouvez voir ici un échantillon de nos dernières réalisations. Si cela ne vous convainc pas assez, découvrez l'expérience complète sous le bouton</p>

                    <a href="les-proprietes/index.php" class="btnt startbtnS mt-5">toutes les propriétés</a>
    
                </div>

                <div class="col-md-6" id="incompetente">

                    <div class="splide">

                        <div class="splide__track">

                            <ul class="splide__list">

                            <?php foreach ($proprietes as $propriete): ?>                            

                                <li class="splide__slide">

                                    <a href="les-proprietes/infos/index.php?id=<?= $propriete['id'];?>" id="lien_prop">

                                        <img src="admin/dashboard/uploads/cover/<?php echo $propriete['cover']; ?>" alt="" id="cover_prop">
            
                                        <!-- <div id="infos_prop">

                                            <span class="type_prop"><?= $propriete['type_prop'];?></span>
                                            <span class="type_prop"><?= $propriete['etat_prop'];?></span>
                
                                            <h2 class="nom_prop"><?= $propriete['nom'];?></h2>
                
                                            <span class="location_pop"><?= $propriete['localisation'];?></span>

                                        </div> -->
            
                                    </a>                                    

                                </li>
                            
                            <?php endforeach ?> 

                            </ul>

                        </div>

                        <div class="splide__progress">
                            <div class="splide__progress__bar">
                            </div>
                        </div>

                    </div>
    
                </div>
    
            </div>
    
        </div>

        

        <!-- RS section -->

        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-md-12 text-center mt-5">

                    <h3>Vous voulez rester au courant ? <br> Suivez nous.</h3>
                    
                    <a href="https://www.facebook.com/Elwinakof-SARL-100306445591152" target="_blank" rel="noopener noreferrer">Facebook</a>

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

                    <a href="nos-services/index.php">Nos services</a> <br>

                    <a href="contact/index.php">Nous Contactez</a> <br>

                    <a href="a-propos-de-nous/index.php">À propos de nous</a>

                </div>

                <div class="col-md-3 text-right">

                    <h3>Nos liens</h3>

                    <a href="faq/index.html">FAQ</a> <br>

                    <a href="politique/index.html">Politique</a> <br>

                    <a href="conditions/index.html">Condition</a> 

                </div>

            </div>

        </div>

    </footer>

    <script>

        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '.splide', {
                type: 'loop',
                // perPage: 2,
                // perMove: 2,
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