<?php

    require_once '../../config/index.php';

    if(isset($_GET['nom'])){

        $nom = $_GET['nom'];
    
        if(empty($nom)){
          header('location: ../');
        } else{
    
    
            $result = $conn->query("SELECT * FROM dreamstudio WHERE nom = '".$nom."'");
            $creation = $result -> fetch_row();
    
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

    <title><?php echo $creation[1]; ?> • datkominformatics • Agence web créative</title>
</head>
<body id="crea_body">
    
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

    <div class="container-fuid" id="creation-head" style="background-image: url('../../assets/img/dreamstudio/cover/<?php echo $creation[5]; ?>'), linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5))">

        <div class="row">

            <div class="col-md-3 col-5 p-2">

                <a href="../../" class="brand-logo" data-stick-cursor>
                    <img id="logo-abbr" src="../../assets/img/Brands/Logo-White.svg" alt="logo">
                </a>

            </div>

            <div class="col-md-6 col-2"></div>

            <div class="col-md-3 col-5 p-2 text-end">

                <a onclick="history.back()" id="back_w"><i data-feather="arrow-left"></i> <span class="responsive-none">Retour</span></a>
                <div class="button_container_2" id="toggle" data-stick-cursor>

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

                                <li><a href="../../">L'agence</a></li>
        
                                <li><a href="../">Dream Studio</a></li>
        
                                <li><a href="../../contact/">Contact</a></li>

                                <li><a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous">Prendre rendez-vous <i data-feather="arrow-up-right"></i></a></li>

                                <li><a href="../../projet/">Démarrer un projet <i data-feather="arrow-right"></i></a></li>

        
                            </ul>

                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12 text-center">

                <h1 class="creation-titre"><?php echo $creation[1]; ?></h1>

            </div>

        </div>

    </div>

    <div class="container mb-5">

        <div class="row mt-4 justify-content-center">

            <div class="col-md-5 responsive-textcenter responsive-padding">

                <h4 id="creation-tag"><?php echo $creation[2]; ?></h4>
                <h6 id="creation-soustag"><?php echo $creation[3]; ?></h6>

                <hr>

                <p><?php echo $creation[4]; ?></p>

                <hr>

                <div class="mt-2">
                    <a target="_blank" href="<?php echo $creation[7]; ?>"><i data-feather="external-link"></i></a>
                </div>

            </div>

            <div class="col-md-5">

                <img src="../../assets/img/dreamstudio/cover/<?php echo $creation[5]; ?>" alt="<?php echo $creation[1]; ?>" class="crea_cover_img">

            </div>

        </div>

        <br>

        <!-- Images -->
        <div class="row mt-4 justify-content-center">

            <div class="col-md-10">

                <div class="slick-carousel-creation">

                    <?php 

                        $query = "SELECT * FROM dreamstudio WHERE nom ='".$nom."'";
                        $res = mysqli_query($conn, $query);

                        if(mysqli_num_rows($res) > 0 ){

                            $row = mysqli_fetch_assoc($res);
                            $temp = array();

                            $row['images']=trim($row['images'], '/,');
                            $temp = explode(',', $row['images']);
                            $temp = array_filter($temp);

                            $nbreInsert = count($temp)-1;

                            for($i = 0; $i <= $nbreInsert; $i++){
    
                                $images = array();

                                foreach ($temp as $image) {
                                    $images[]="../../assets/img/dreamstudio/images/".trim( str_replace(array('[',']') ,"" ,$image ));
                                }

                                echo "<div><img src=\"".$images[$i]."\" class=\"crea_img\"></div>";

                            }

                        }

                    
                    ?>
                    
                </div>

            </div>

        </div>

        <!-- previous & next -->
        <div class="row mb-4 justify-content-center text-end responsive-textcenter">

            <div class="col-md-10">

                <a href="" class="Prec-btn-crea"><i data-feather="arrow-left"></i></a>
                <a href="" class="Suiv-btn-crea"><i data-feather="arrow-right"></i></a>

            </div>

        </div>

    </div>

    <div class="container-fluid p-4" id="crea_bottom">
        
        <div class="row justify-content-center">

            <div class="col-md-12 responsive-textcenter navbar">
            
                <a href="#creation-head">Retour en haut <i data-feather="arrow-up"></i></a>
                <a href="../">Voir d'autres projets</a>
                <a href="../../projet/">Débuter un projet <i data-feather="arrow-right"></i></a>  
                <a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous">Prendre rendez-vous <i data-feather="arrow-up-right"></i></a>  

            </div>

        </div>

    </div>  
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

    <script>

        $('.slick-carousel-creation').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.Prec-btn-crea'),
        nextArrow: $('.Suiv-btn-crea'),
        responsive: [
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
            }
        ] 
        });

    </script>

</body>
</html>