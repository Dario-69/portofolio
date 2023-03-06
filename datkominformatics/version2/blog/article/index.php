<?php

    require_once '../../config/index.php';

    if(isset($_GET['titre'])){

        $titre = $_GET['titre'];
    
        if(empty($titre)){
          header('location: ../');
        } else{
    
    
            $result = $conn->query("SELECT * FROM blog WHERE titre = '".$titre."'");
            $article = $result -> fetch_row();
    
        }
    
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- icon -->
    <link rel="shortcut icon" href="../../assets/img/Brands/Logo-Blue.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../assets/img/Brands/Logo-Blue.svg">

        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQ4S0NR52B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQ4S0NR52B');
    </script>


    <!-- Links -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/main.css">

    <!-- CNDs -->

        <!-- icons -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Slick -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
        <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <!--  -->

    <title><?php echo $article[2]; ?> • datkominformatics • Agence web créative</title>
</head>
<body>
    
    <!-- Loader -->

        <div id="loader">

            <div class="ios-loader">
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div>
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>
                <div class="bar bar6"></div>
                <div class="bar bar7"></div>
                <div class="bar bar8"></div>
                <div class="bar bar9"></div>
                <div class="bar bar10"></div>
                <div class="bar bar11"></div>
                <div class="bar bar12"></div>
            </div>

        </div>

    <!-- End laoder -->

    <!-- Header nav -->

        <div class="head-top"></div>
        <div class="container-fluid" id="header-navbar">

            <div class="row">
    
                <div class="col-md-3 col-5">

                    <a href="../../" class="brand-logo" data-stick-cursor>
                        <img id="logo-abbr" src="../../assets/img/Brands/Logo-Blue.svg" alt="logo">
                        <img src="../../assets/img/Brands/Typographie.svg" id="brand-title" alt="nom">
                    </a>

                </div>

                <div class="col-md-7 col-3"></div>

                <div class="col-md-1 col-2 text-end">
                    <a href="../"><i data-feather="arrow-left"></i> <span class="responsive-none">Retour</span></a>
                </div>

                <div class="col-md-1 col-2">

                    <div class="button_container" id="toggle" data-stick-cursor>

                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>

                    </div>

                </div>

            </div>

            <!-- Burger Navigation -->
            <div class="burgerMenu" id="overlay">

                <div class="container-fluid">

                    <div class="row justify-content-end">

                        <div class="col-md-9">
                            
                            <nav class="overlay-menu">

                                <ul>

                                    <li><a href="">L'agence</a></li>
            
                                    <li><a href="dreamstudio/">Dream Studio</a></li>
            
                                    <li><a href="contact/">Contact</a></li>

                                    <li><a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous">Prendre rendez-vous <i data-feather="arrow-up-right"></i></a></li>

                                    <li><a href="projet/">Démarrer un projet <i data-feather="arrow-right"></i></a></li>

            
                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <!-- End Header nav -->

    <!-- header -->

        <div class="container-fluid header-cta" id="homepage-header-cta">

            <div class="row justify-content-center article-mtop">

                <div class="col-md-5">

                    <img src="../../assets/img/blog/<?php echo $article[3]; ?>" alt="<?php echo $article[2]; ?>" id="blog_cover">

                </div>

                <div class="col-md-5">

                    <div class="mt-4 mb-5">
                            
                        <span id="blog_tag"><?php echo $article[1]; ?></span>

                    </div>
                    <h2 id="article_titre"><?php echo $article[2]; ?></h2>

                </div>

            </div>

        </div>

    <!-- end header -->

    <hr>

    <!-- Content -->

        <div class="container mt-5 mb-5">

            <div class="row mb-5 justify-content-center">

                <div class="col-md-10" id="blog_article_contenu">

                    <?php echo nl2br(html_entity_decode($article[4])); ?>               

                </div>

            </div>

            

            <div class="row mt-5 justify-content-center">

                <div class="col-md-10 text-end">

                    <hr>
                    <p>Article écrit le <?php echo $article[5]; ?></p>

                </div>

            </div>

        </div>

    <!-- end content -->
    
    <!-- JavaScript -->
    <script>

        feather.replace();

        //Preloader
        $(window).on("load", function(){ 
        // Preloader 
        $('#loader').fadeOut('slow');
        $('.ios-loader').fadeOut('slow'); 
        });  

        //
        $(function () {

            //if mobile burger menu clicked
            $('#toggle').click(function () {
            $(this).toggleClass('active');
            $('#overlay').toggleClass('open');
            });

        });

    </script>

    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/carousel.js"></script>

</body>
</html>