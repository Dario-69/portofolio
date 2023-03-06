<?php

  //DB Config
  require_once '../config/index.php';

  $q = "SELECT * FROM clients";

  $sth = $pdo->prepare($q);
  $sth->execute();
  $clients = $sth->fetchAll();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/nos-services.css">
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

                        <a href="../index.php"><h1 id="logo_2">ELWINAKOF</h1></a>

                    </div>

                    <div class="col-md-8 col-7 text-right">

                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">fermer &times;</a>

                    </div>

                </div>

                <div class="row mt-5">

                    <div class="col-md-6" id="MyNavA">

                        <a href="../les-proprietes/index.php">Les propriétés</a>

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

                <a href="../les-proprietes/index.php" id="lesproprietes">Les propriétés</a>

                <div class="button_container" onclick="openNav()">

                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>

                </div>

            </div>

        </div>

    </div>
    
    <div class="content">

        <div class="container-fluid" id="service">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">
    
                        <h2 class="what_s" >Nos services</h2>
    
                    </div>
    
                    <div class="col-md-6">
    
                        <p class="what">ELWINAKOF est la meilleure agence immobilière qui vous accompagne dans l'achat, la vente et également la location d'une maison ou d'un terrain. Elle vous permettra d’acheter, de vendre ou de louer un terrain ou une maison dans les meilleurs délais, et au meilleur prix.</p>
    
                    </div>
    
                </div>

            </div>

        </div>

        <!-- Services ancre -->

        <div class="container-fluid" id="les_services">

            <div class="row" id="les_services_row">

                <a href="#services_1" class="col-md-4 nos-services">Achat</a>

                <a href="#services_2" class="col-md-4 nos-services">Vente</a>
                
                <a href="#services_4" class="col-md-4 nos-services">Location</a>
                
            </div>

        </div>

        <!-- Service 1 -->

        <div class="container-fluid" id="services_1">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <h1>Achat</h1>

                    </div>

                    <div class="col-md-6">

                        <p>Acheter un bien immobilier, c’est souvent un projet de vie. Que ce soit une maison pour y habiter ou un terrain, il est donc essentiel de posséder toutes les informations nécessaires pour faire un choix éclairé.</p>

                        <p class="mb-5">ELWINAKOF vous aide à chaque étape. Grâce à nos conseils, vous apprenez à sélectionner les critères importants pour vous et à choisir ce qui vous convient. Et bien sûr, nous vous accompagnons et vous conseillons au cours de votre parcours d’achat immobilier : visites, offre d’achat, signature devant le notaire.</p>

                        <a href="achat/index.html" class="btnt startbtn3">... plus d'information</a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Service 2 -->

        <div class="container-fluid" id="services_2">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <h1>Vente</h1>

                    </div>

                    <div class="col-md-6">

                        <p>Vendre une maison ou un terrain représente un grand bénéfice. Il faut prendre le temps de définir vos critères en fonction de vos besoins puis de réellement chercher un bon démarcheur. Il est aussi nécessaire de se renseigner sur le marché immobilier et sur les conditions qui vont impacter votre vente.</p>

                        <p class="mb-5">Pour être bien accompagné et bénéficier de conseils, il est important de bien vous entourer durant votre projet. ELWINAKOF pourra en effet vous donner des conseils en fonction du type de bien à vendre, maison ou terrain par exemple. Elle pourra vous aider également à monter votre dossier et à estimer les frais de vente.</p>

                        <a href="vente/index.html" class="btnt mt-5 startbtn4">... plus d'information</a>

                    </div>

                </div>

            </div>

        </div>

        <!-- Service 4 -->

        <div class="container-fluid" id="services_4">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <h1>Location</h1>

                    </div>

                    <div class="col-md-6">

                        <p>La location d'une maison peut paraître compliquée et difficile, cependandant, l'agence ELWINAKOF vous aide à trouver une belle maison à louer suivant vos critères.</p>

                        <p class="mb-5">L'agence ELWINAKOF peut vous accompagner dans vos démarches, et vous aider à trouver votre maison de rêve.</p>

                        <a href="location/index.html" class="btnt mt-5 startbtn5">... plus d'information</a>

                    </div>

                </div>

            </div>

        </div>

        <!-- client -->

        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h2>Clients</h2>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="splide">

                        <div class="splide__track">

                            <ul class="splide__list">

                                <?php foreach ($clients as $client): ?>  

                                    <li class="splide__slide">
                                        <h1>" <?= $client['testimony'];?> "</h1>
                                        <span><?= $client['nom'];?></span>
                                    </li>
                                
                                <?php endforeach ?>

                            </ul>
    
                        </div>

                    </div>

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