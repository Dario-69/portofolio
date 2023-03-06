<?php

  //DB Config
  require_once '../config/index.php';

  $q = "SELECT * FROM blog ORDER BY id DESC LIMIT 1";

  $sth = $pdo->prepare($q);
  $sth->execute();
  $blog_infos = $sth->fetch(\PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../design/img/logo/logo_bleu.png" type="image/x-icon">
    <meta name="description" content="Notre agence web est spécialisée dans la création de site internet sur mesure, nous proposons un accompagnement personnalisé dans tous vos projets digitaux.">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQ4S0NR52B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQ4S0NR52B');
    </script>

    <link rel="stylesheet" href="../design/css/style.css">
    <link rel="stylesheet" href="../design/css/choice.css">
    <link rel="stylesheet" href="../design/css/color.css">
    <link rel="stylesheet" href="../design/css/agency.css">
    <link rel="stylesheet" href="../design/css/cursor.css">
    <link rel="stylesheet" href="../design/css/animate.css">

    <link rel="stylesheet" href="../design/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">


        <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>

    <!-- cursor -->
    <div class="cursor" data-cursor><div></div></div>

    <!-- content -->
    <div class="content">

        <!-- Header Section -->
        <div class="container-fluid droite_text" id="head">

            <!-- Navigation -->
            <div class="container-fluid">
    
                <div class="row">
    
                    <div class="col-md-3 col-5">
    
                        <a href="../index.php" class="brand-logo">
                            <img id="logo-abbr" src="" alt="logo">
                            <img id="logo-compact" src="" alt="logo">
                            <h6 class="brand-title">datkominformatics</h6>
                        </a>
    
                    </div>
    
                    <div class="col-md-8 col-5"></div>
    
                    <div class="col-md-1 col-2">
    
                        <div class="button_container" id="toggle">
    
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>

            <!-- Burger Navigation -->
            <div class="burgerMenu" id="overlay">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-6" id="gauche_nav">

                            <nav class="overlay-menu">

                                <ul>

                                    <li><a class="page-link" href="../index.php">Accueil</a></li>
            
                                    <li><a class="page-link" href="#">Notre agence</a></li>
            
                                    <li><a class="page-link" href="../our-services/index.php">Nos services</a></li>
            
                                    <li><a class="page-link" href="../contact/index.php">Contactez-nous !</a></li>
            
                                    <li><a class="page-link wht_up" href="../blog/index.php">Blog</a></li>

                                </ul>
            
                            </nav>

                            <div class="container">

                                <div class="row">

                                    <div class="col-md-12 text-center social-network-block">

                                        <a href="https://www.facebook.com/Datkom-Informatics-103544454610498/" class="mr-2 social-network">Facebook</a>
                                        <a href="https://twitter.com/datkominfrmtics?s=20" class="mr-2 social-network">Twitter</a>
                                        <a href="https://www.linkedin.com/company/datkom-informatics" class="mr-2 social-network">Linkedin</a>
                                        <a href="https://www.instagram.com/datkom_informatics" class="social-network">Instagram</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-6" id="droite_nav">

                            <ul>

                                <nav class="overlay-menu">

                                    <ul>
    
                                        <li><a class="page-link-2" href="../portfolio/index.php">Portfolio</a></li>
                
                                        <li><a class="page-link-2" href="../blog/post/index.php?id=<?= $blog_infos['id'];?>"><?php echo $blog_infos['titre'] = 'Dernier article'; ?></a></li>
                                
                                        <li><a class="page-link-2" href="../blog/index.php">Blog</a></li>
                
                                    </ul>
                
                                </nav>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Header CTA -->
            <div class="container">
    
                <div class="row">

                    <div class="col-md-9">
    
                        <h1 id="titre" class="wow fadeIn">Nous sommes des<br><span class="diffrent">Designers</span></h1>

                        <p>Nous sommes une agence web à distance basée à Lomé, qui travaille avec des clients du monde entier. En tant que designers passionnés, nous aimons créer des produits faciles à utiliser, accessibles, attrayants et agréables.</p>
                        
                        <a href="../contact/index.php" class="projet"> Un projet ? Contactez-nous !</a>
    
                    </div>

                    <div class="col-md-3">


                    </div>
    
                </div>
    
            </div>
    
        </div>

        <!-- Notre équipe Section -->
        <div class="container mt-5 droite_text">

            <div class="row">

                <div class="col-md-9">

                    <h3 class="subtitle">Une équipe jeune, créative et passionnée</h3>

                    <p>Nos développeurs créent pour vous un site puissant et facile à utiliser. Nos graphistes créent des designs modernes et attrayants pour offrir à vos visiteurs la meilleure expérience utilisateur. Notre responsable marketing élabore une stratégie pour faire décoller votre entreprise.</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="splide">

                        <div class="splide__track">

                            <ul class="splide__list">

                                <li class="splide__slide">
                                    
                                    <div class="text-center team_members">

                                        <img src="../design/img/team/CEO.PNG" alt="CEO" width="42%">

                                        <div class="members_info">

                                            <h5>Darius OCCANSEY</h5>
                                            <p>PDG & Concepteur de site web</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/COO.PNG" alt="COO" width="42%">

                                        <div class="members_info">

                                            <h5>Brice MOUKE</h5>
                                            <p>Directeur des opérations & Juriste</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/CTO.PNG" alt="CTO" width="42%">

                                        <div class="members_info">

                                            <h5>Othniel AGHEY</h5>
                                            <p>Directeur technique & Développeur Frontend</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                    <img src="../design/img/team/Marketing Manager.PNG" alt="Marketing Manager" width="42%">

                                        <div class="members_info">

                                            <h5>Stephanie TRIBIA</h5>
                                            <p>Responsable Marketing</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Designer-01.PNG" alt="Designer 01" width="42%">

                                        <div class="members_info">

                                            <h5>Jeannot KOTIKO</h5>
                                            <p>Graphiste</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Designer-02.PNG" alt="Designer 02" width="42%">

                                        <div class="members_info">

                                            <h5>Marc SANVI</h5>
                                            <p>Graphiste</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Designer-03.PNG" alt="Designer 03" width="42%">

                                        <div class="members_info">

                                            <h5>Kelly DARABOR</h5>
                                            <p>UX/UI Designer</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/CM.PNG" alt="CM" width="42%">

                                        <div class="members_info">

                                            <h5>Boris SOSSOU</h5>
                                            <p>Community Manager</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Frontend.PNG" alt="Frontend Developer" width="42%">

                                        <div class="members_info">

                                            <h5>Josue ANANI</h5>
                                            <p>Développeur Frontend</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Laravel-01.PNG" alt="Laravel Developer 01" width="42%">

                                        <div class="members_info">

                                            <h5>Samuel MAGLODJI</h5>
                                            <p>Développeur Laravel</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Laravel-02.PNG" alt="Laravel Developer 02" width="42%">

                                        <div class="members_info">

                                            <h5>Modeste KOUASSI</h5>
                                            <p>Développeur Laravel</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Backend-01.PNG" alt="Backend Developer 01" width="42%">

                                        <div class="members_info">

                                            <h5>Denis ADJEVI</h5>
                                            <p>Développeur Backend PHP</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Backend-02.PNG" alt="Backend Developer 02" width="42%">

                                        <div class="members_info">

                                            <h5>Aurel VIGNON</h5>
                                            <p>Développeur Backend PHP</p>

                                        </div>

                                    </div>

                                </li>

                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="../design/img/team/Backend-03.PNG" alt="Backend Developer 03" width="42%">

                                        <div class="members_info">

                                            <h5>Josue LAWSON</h5>
                                            <p>Développeur Backend PHP</p>

                                        </div>

                                    </div>

                                </li>
                                <!-- 
                                <li class="splide__slide">

                                    <div class="text-center team_members">

                                        <img src="" alt="members img">

                                        <div class="members_info">

                                            <h5>Elko KOUETE</h5>
                                            <p>Copywriter</p>

                                        </div>

                                    </div>

                                </li> -->

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Pourquoi-nous Section -->
        <div class="container droite_text">

            <div class="row">

                <div class="col-md-9">

                    <h3 class="subtitle">Pourquoi choisir notre agence ?</h3>

                    <p>Notre mission est de soutenir les équipes entreprenantes qui cherchent à rendre le monde meilleur. Nous combinons design créatif et technologie en travaillant avec les dirigeants pour intégrer des solutions innovantes dans un produit de la manière la plus intuitive possible. Le résultat ? Un impact mesurable et significatif.</p>

                    <a href="../contact/index.php" class="projet_2">Parlez-nous de votre projet !</a>

                </div>

            </div>

        </div>

        <!-- Comment nous fonctionnons Section -->
        <div class="container mt-5 droite_text">

            <div class="row mb-2">

                <div class="col-md-9">

                    <h3 class="subtitle">Ce que nous défendons</h3>

                </div>

            </div>

            <div class="row">

                <div class="col-md-5">

                    <img src="../design/img/illustrations/cooperation.svg" alt="Trust" width="10%" class="mb-1">

                    <h5>Confiance</h5>

                    <p class="support_infos">La confiance est le lien qui nous unit. Nous nous faisons mutuellement confiance pour donner le meilleur et toujours faire ce qu'il faut pour nos clients. En définitive, cette confiance sous-tend notre processus et conduit aux meilleurs résultats possibles.</p>

                </div>

                <div class="col-md-5">

                    <img src="../design/img/illustrations/scores.svg" alt="Work" width="10%" class="mb-1">

                    <h5>Un travail exceptionnel</h5>

                    <p class="support_infos">Nous sommes très exigeants et nous prenons un réel plaisir à soigner le moindre détail. Si notre travail n'est pas exceptionnel, il n'est pas livré.</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-5">

                    <img src="../design/img/illustrations/lightbulb.svg" alt="Open-minded" width="10%" class="mb-1">

                    <h5>Toujours ouverts d'esprit</h5>

                    <p class="support_infos">Nous faisons de la place pour l'expérimentation créative et accueillons l'opportunité d'apprendre à chaque instant. Cette approche curieuse nous amène à découvrir des façons délicieuses et surprenantes de résoudre les problèmes et conduit à des résultats nettement meilleurs.</p>

                </div>

                <div class="col-md-5">

                    <img src="../design/img/illustrations/people.svg" alt="Family" width="10%" class="mb-1">

                    <h5>Nous sommes une famille</h5>

                    <p class="support_infos">Travailler avec vous, c'est faire partie de quelque chose de plus grand que soi. Faire partie d'une tribu, c'est rejoindre une communauté passionnée. Dans notre tribu, nous partageons des rires et embrassons une passion démesurée.</p>

                </div>

            </div>


        </div>

        <!-- CTA Section -->
        <div class="container-fluid mt-5" id="CTA">

            <div class="row">

                <div class="col-md-12 text-center">

                    <p>N'attendez plus!</p>

                    <h2>Donnez vie à votre projet</h2>

                    <a href="../your-adventure/index.php">Parlez-nous de votre projet</a>

                </div>

            </div>

        </div>

    </div>
    
    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-3 text-left">

                    <div>

                        <img id="nom_logo" src="" alt="typography" width="50%">

                    </div>

                    <div class="mt-3">
                        <span>© <script>document.write(new Date().getFullYear())</script> Tous droits réservés.</span>
                    </div>

                    <div class="clb mt-3">
        
                        <div id="light-toggle-footer" class="clr animate__animated animate__fadeInUp"></div>
                        <div id="dark-toggle-footer" class="clr animate__animated animate__fadeInUp"></div>

                    </div>

                </div>

                <div class="col-md-3 text-left">

                    <p>Rejoindre la communauté</p>

                    <div class="mt-3">

                        <form role="form" id="newsletters-form" method="POST">

                            <input type="email" name="email" id="email" class="form-control inpuut" placeholder="Entrez votre email !" required>

                            <button type="submit" name="submit" class="form-control Join">Rejoindre</button>

                        </form>

                    </div>

                </div>

                <div class="col-md-3 text-left">

                    <p>Discutons ensemble</p>

                    <div class="discutons">

                        <a href="tel:+228 92 69 87 19">+228 92 69 87 19</a>

                        <br>

                        <a href="mailto:hello@datkominformatics.com">hello@datkominformatics</a>

                    </div>

                </div>

                <div class="col-md-3 text-right">

                    <div>

                        <a href="https://www.facebook.com/Datkom-Informatics-103544454610498/" class="mr-2">Facebook</a>

                        <a href="https://twitter.com/datkominfrmtics?s=20" class="mr-2">Twitter</a>

                        <a href="https://www.linkedin.com/company/datkom-informatics" class="mr-2">Linkedin</a>

                        <a href="https://www.instagram.com/datkom_informatics">Instagram</a>

                    </div>

                    <div class="mt-3">

                        <a href="../legal-notice/index.php">Legal notice</a>

                        <br>

                        <a href="../terms-of-use/index.php">Terms of use</a>

                        <br>

                        <a href="../privacy-policy/index.php">Privacy policy</a>

                        <br>

                        <a href="../sitemap/index.php">Site Map</a>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="../design/js/main.min.js"></script>
    <script src="../design/js/avtr.js"></script>
    <script src="../design/js/cursor.js"></script>
    <script src="../design/js/wow.js"></script>
    <script>
        new WOW().init();
    </script>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js'></script>

    <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        /*Theme Mode Setting*/
        let themeMode = sessionStorage.getItem("themeMode");

        $("#dark-toggle").click(
        function () {
            $('body').removeClass('light');
            $('body').addClass('dark');

            sessionStorage.setItem("themeMode", 'dark');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../design/img/nom/nom_blanc.png";

        })

        $("#light-toggle").click(
        function () {
            $('body').removeClass('dark');
            $('body').addClass('light');

            sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../design/img/nom/nom_bleu.png";

        })

        if (themeMode == null) {
        sessionStorage.setItem("themeMode", 'light'); //set default themeMode
        }

        if (themeMode == 'light') {
        $('body').addClass('light');
        $('body').removeClass('dark');
        sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../design/img/nom/nom_bleu.png";

        }

        if (themeMode == 'dark') {
        $('body').addClass('dark');
        $('body').removeClass('light');
        sessionStorage.setItem("themeMode", 'dark');

        document.getElementById("logo-abbr").src="../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../design/img/nom/nom_blanc.png";

        }

        //Footer

        $("#dark-toggle-footer").click(
        function () {
            $('body').removeClass('light');
            $('body').addClass('dark');

            sessionStorage.setItem("themeMode", 'dark');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../design/img/nom/nom_blanc.png";

        })

        $("#light-toggle-footer").click(
        function () {
            $('body').removeClass('dark');
            $('body').addClass('light');

            sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../design/img/nom/nom_bleu.png";

        })
    
        //Toggle

        $(function () {

        //if mobile burger menu clicked
        $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
        });


        });


        //Vertical scroll

        $('.slick-carousel').slick({
        infinite: false,
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.Prec-btn'),
        nextArrow: $('.Suiv-btn') });

    </script>

    <script>

        document.addEventListener( 'DOMContentLoaded', function () {
                    new Splide( '.splide', {
                        type: 'slide',
                        perPage: 2,
                        perMove: 2,
                        pagination: false,
                        height: '60vh',
                        arrows: false,
                        // autoWidth: true,
                        // autoplay: true,
                    } ).mount();

                } );

    </script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#newsletters-form').on('submit',function(e) {  //Don't foget to change the id form

                var email = $('#email').val();
                        
                if(email !=""){
                    $.ajax({

                        type:'POST',
                        url:'../config/newsletters.php', //===PHP file name====
                        data:{
                            email : email
                        },
                        cache : false,

                        success:function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            // console.log(data);
                            //Success Message == 'Title', 'Message body', Last one leave as it is
                            swal("Génial","Bienvenue dans notre communauté", "success")
                            if(dataResult.statusCode==200){
                                swal("Génial","Bienvenue dans notre communauté", "success")
                            }
                            else if(dataResult.statusCode==201){
                                swal("Oops...", "Quelque chose a mal tourné :(", "error");
                            }
                        },

                        error:function(data){
                            //Error Message == 'Title', 'Message body', Last one leave as it is
                            swal("Oops...", "Quelque chose a mal tourné :(", "error");
                        }

                    });
                }
                else{
                    swal("Oops...", "les champs sont vides :(", "error");
                }
                
                e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"

            });

        });

    </script>


</body>
</html>