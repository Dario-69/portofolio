<?php

  //DB Config
  require_once '../config/index.php';

  $q = "SELECT * FROM proprietes WHERE id IN('1','2','3')";

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>À propos de nous - Elwinakof</title>
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

                        <a href="#">à propos de nous</a>

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

        <!-- Debut -->

        <div class="container-fluid" id="whoare">

            <div class="container">
    
                <div class="row">
    
                    <div class="col-md-12 text-center">
    
                        <h1 id="who">Qui sommes nous ?</h1>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>

        <!-- Quelques mots -->

        <div class="container" id="quelquemots">

            <div class="row mb-5">

                <div class="col-md-5">

                    <h3>Quelques mots sur nous</h3>

                </div>

                <div class="col-md-7 mb-5 text-justify">

                    <p>ELWINAKOF est une agence immobilière qui accompagne votre projet immobilier. Que vous souhaitiez acheter, vendre ou louer un logement, ELWINAKOF vous aidera à trouver ce que vous recherchiez. Lors d’un projet d’achat immobilier, le rôle d’ELWINAKOF est de vous aider à trouver le logement idéal, puis de vous accompagner dans les démarches. L’entreprise ELWINAKOF est attentive à vos besoins (type de logement, surface, nombre de chambres…), mais aussi à votre budget. Elle peut également vous conseiller de façon adaptée, selon que vous souhaitiez acheter pour habiter ou pour investir.</p>

                </div>

            </div>


        </div>

        <!-- ce que nous faisons -->

        <div class="container-fluid mt-5 mb-5">

            <div class="row mt-5 mb-5">

                <div class="col-md-12 text-center">

                    <h1 id="CQNFS">Ce que nous <br> faisons</h1>

                </div>

            </div>

            <div class="row mt-5">

                <a href="" class="col-md-4 cequenousfaisons services1">

                    <div class="service_content">
                        <h3 class="service_content_title">Achat<br>de bien immobilier</h3>
                        <div class="service_content_desc" style="height: 0px;">
                            <p class="text-justify plusplus">Acheter un bien immobilier, c’est souvent un projet de vie. Que ce soit une maison pour y habiter ou un terrain, il est donc essentiel de posséder toutes les informations nécessaires pour faire un choix éclairé.</p>
                            <p>Plus d'information</p>
                        </div>
                    </div>

                </a>

                <a href="" class="col-md-4 cequenousfaisons services2">

                    <div class="service_content">
                        <h3 class="service_content_title">Vente<br>de bien immobilier</h3>
                        <div class="service_content_desc" style="height: 0px;">
                            <p class="text-justify plusplus"> Vendre une maison ou un terrain représente un grand bénéfice. Il faut prendre le temps de définir vos critères en fonction de vos besoins puis de réellement chercher un bon démarcheur. Il est aussi nécessaire de se renseigner sur le marché immobilier et sur les conditions qui vont impacter votre vente. </p>
                            <p>Plus d'information</p>
                        </div>
                    </div>

                </a>

                <a href="" class="col-md-4 cequenousfaisons services3">

                    <div class="service_content">
                        <h3 class="service_content_title">Location<br>de bien immobilier</h3>
                        <div class="service_content_desc" style="height: 0px;">
                            <p class="text-justify plusplus">La location d'une maison peut paraître compliquée et difficile, cependandant, l'agence ELWINAKOF vous aide à trouver une belle maison à louer suivant vos critères.</p>
                            <p>Plus d'information</p>
                        </div>
                    </div>

                </a>

            </div>

            <div class="row text-center mb-5">

                <div class="col-md-12 mb-5">

                    <h4 class="mt-5 mb-5">Depuis sa création, ELWINAKOF fait tout son possible pour vous aider à réaliser vos rêves.</h4>

                    <a href="../les-proprietes/index.php" class="btnt startbtn2">voir les propriétés</a>

                </div>

            </div>

        </div>

        <!-- un mot du dirigeant -->
        
        <!-- <div class="container mt-5 mb-5">

            <div class="row mt-5 mb-5">

                <div class="col-md-12 text-center">

                    <h3>Nos valeurs</h3>

                </div>

            </div>

            <div class="row mt-5">

                <div class="col-md-5 cequenousfaisons services4">

                </div>

                <div class="col-md-7" id="text_cqnfs">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem corporis sint iure harum, numquam ea nisi aperiam mollitia ex incidunt consequuntur vero asperiores dolorum natus odit amet rerum a nostrum!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus eaque dicta corrupti fuga eius ea quo, in repudiandae! Asperiores magnam vero quia quod, dolorum quisquam eaque odio quidem odit veniam!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus eaque dicta corrupti fuga eius ea quo, in repudiandae! Asperiores magnam vero quia quod, dolorum quisquam eaque odio quidem odit veniam!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus eaque dicta corrupti fuga eius ea quo, in repudiandae! Asperiores magnam vero quia quod, dolorum quisquam eaque odio quidem odit veniam!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus eaque dicta corrupti fuga eius ea quo, in repudiandae! Asperiores magnam vero quia quod, dolorum quisquam eaque odio quidem odit veniam!</p>
                
                </div>

            </div>

        </div> -->

        <!-- Les derniers propriétés -->

        <div class="container mt-5 mb-5">

            <div class="row">

                <div class="col-md-12 mt-5">

                    <h3>Les récents propriétés</h3>
                    <p>Vous pouvez voir ici un échantillon de nos dernières réalisations.</p>

                </div>

            </div>

            <div class="row mt-5 mb-5">

            <?php foreach ($proprietes as $propriete): ?>

                <div class="col-md-4">

                    <a href="infos/index.php?id=<?= $propriete['id'];?>">

                        <img src="../admin/dashboard/uploads/cover/<?php echo $propriete['cover']; ?>" alt="" width="100%">

                        <span class="type_prop"><?= $propriete['type_prop'];?></span>

                        <h2 class="nom_prop"><?= $propriete['nom'];?></h2>

                        <span class="location_pop"><?= $propriete['localisation'];?></span>

                    </a>

                </div>

            <?php endforeach ?>  

            </div>

            <div class="row mb-5">

                <div class="col-md-12 text-center">

                    <a href="" class="btnt startbtn2 mt-5">toutes les propriétés</a>

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