<?php

    require_once 'config/index.php';

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
    <meta name="description" content="Agence web à Lomé, experte en création de site sur mesure ! Développement web, Design, Marketing, Branding. Optez pour un site UNIQUE, 100% adapté à vos besoins !">
    <link rel="shortcut icon" href="design/img/logo/logo_bleu.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="design/img/logo/logo_bleu.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQ4S0NR52B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQ4S0NR52B');
    </script>
    
    <link rel="stylesheet" href="design/css/adventure.css">
    <link rel="stylesheet" href="design/css/style.css">
    <link rel="stylesheet" href="design/css/main.css">
    <link rel="stylesheet" href="design/css/color.css">
    <link rel="stylesheet" href="design/css/choice.css">
    <link rel="stylesheet" href="design/css/cursor.css">
    <link rel="stylesheet" href="admin/dashboard/assets/icons/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="design/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>

    <script src="https://cdn.boomcdn.com/libs/wow-js/1.3.0/wow.js"></script>
    
    <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>

    <!-- Chargement Section -->
    <div class="container-fluid">
        
        <div class="overlay">

            <div class="container-fluid" id="avtr">

                <div class="row">
        
                    <div class="col-md-12 text-center screen">
        
                        <div class="tit"> 
                            
                            <h2 class="s1 animate__animated animate__fadeInDown">Prêt pour une aventure créative ?</h2>
        
                        </div>
    
                        <p class="prc animate__animated animate__fadeIn">Pour commencer, choisissez une couleur :</p>
        
                        <div class="clb">

                            <div id="light-toggle" class="clr animate__animated animate__fadeInUp" onclick="fadeOut()"></div>
                            <div id="dark-toggle" class="clr animate__animated animate__fadeInUp" onclick="fadeOut()"></div>

                        </div>
        
                    </div>
        
                </div>
        
            </div>

        </div>
            
    </div>
    
    <div class="overlay-2">
    </div>

    <!-- content -->
    <div class="content">

        <!-- Header Section -->
        <div class="container-fluid" id="head" >

            <!-- Navigation -->
            <div class="container-fluid">
    
                <div class="row">
    
                    <div class="col-md-3 col-5">
    
                        <a href="index.php" class="brand-logo" data-stick-cursor>
                            <img id="logo-abbr" src="" alt="logo">
                            <img id="logo-compact" src="" alt="logo">
                            <h6 class="brand-title">datkominformatics</h6>
                        </a>
    
                    </div>
    
                    <div class="col-md-8 col-5"></div>
    
                    <div class="col-md-1 col-2">
    
                        <div class="button_container" id="toggle" data-stick-cursor>
    
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

                                    <li><a class="page-link" href="#">Accueil</a></li>
            
                                    <li><a class="page-link" href="our-agency/index.php">Notre agence</a></li>
            
                                    <li><a class="page-link" href="our-services/index.php">Nos services</a></li>
            
                                    <li><a class="page-link" href="contact/index.php">Contactez-nous!</a></li>

                                    <li><a class="page-link wht_up" href="blog/index.php">Blog</a></li>
            
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
    
                                        <li><a class="page-link-2" href="portfolio/index.php">Portfolio</a></li>
                
                                        <li><a class="page-link-2" href="blog/post/index.php?id=<?= $blog_infos['id'];?>"><?php echo $blog_infos['titre'] = 'Dernier article'; ?></a></li>
                                
                                        <li><a class="page-link-2" href="blog/index.php">Blog</a></li>
                
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
    
                    <div class="col-md-7">
    
                        <h1 class="pub_first">L'agence web que vous attendiez pour votre <span class="typed"></span></h1>
    
                    </div>

                    <div class="col-md-5">

                        <img src="design/img/illustrations/homepage.svg" alt="homepage">

                    </div>
    
                </div>

                <div class="row mt-3 mb-3">

                    <div class="col-md-8">

                        <a href="our-agency/index.php" class="decouvrir" data-stick-cursor>Découvrir l'agence</a>

                    </div>

                </div>
    
            </div>
    
            <!-- cursor -->
            <div class="cursor" data-cursor><div></div></div>

        </div>
    
        <!-- Service Section -->
        <div class="container" id="srvc_pg">
    
            <div class="row" style="margin-bottom: 24vh;">
    
                <div class="col-md-6">
    
                    <h2 class="service_titre"><span>Branding</span> <br> Identité visuelle</h2>

                    <p class="mt-5 mb-5">Nous croyons aux émotions et à leur impact sur le comportement d'achat. Nous créons des identités pour transmettre votre message, vos valeurs et vos produits à travers des graphismes attrayants. Que ce soit pour une création ou pour une refonte complète d'une identité déjà existante, nous mettons tout en œuvre pour faire de votre entreprise une marque d'amour dans le monde en ligne.</p>

                    <a href="our-services/index.php#BRANDING" class="learn_btn">En savoir plus</a>

                </div>

                <div class="col-md-6" id="branding-background">
    

                </div>

            </div>

            <div class="row" style="margin-bottom: 24vh;">

                <div class="col-md-6" id="design-background">
    
                </div>

                <div class="col-md-6 droite_text">
    
                    <h2 class="service_titre"><span>Design</span> <br> UI / UX design</h2>

                    <p class="mt-5 mb-5">Nous aimons travailler avec le numérique, nous concevons des sites web et des interfaces numériques pour des applications. Pour nous, l'UX est une partie fondamentale de la conception d'interfaces numériques et c'est la phase dans laquelle nous consacrons plus de temps et de ressources pour réaliser des produits efficaces.</p>

                    <a href="our-services/index.php#DESIGN" class="learn_btn">En savoir plus</a>

                </div>

            </div>

            <div class="row" style="margin-bottom: 24vh;">
    
                <div class="col-md-6">
    
                    <h2 class="service_titre"><span>Marketing digital</span> <br> Campagne publicitaire sociale</h2>

                    <p class="mt-5 mb-5">Nous pensons que le marketing est une fonction essentielle de toute entreprise et qu'une approche commerciale du marketing fait la différence entre un site qui n'a qu'une belle apparence et un site qui génère des revenus. Nous veillons à ce que vous disposiez d'une stratégie solide sur laquelle vous pouvez vous appuyer à long terme.</p>

                    <a href="our-services/index.php#MARKETING" class="learn_btn">En savoir plus</a>

                </div>

                <div class="col-md-6" id="marketing-background">
    
                </div>

            </div>

            <div class="row" style="margin-bottom: 24vh;">

                <div class="col-md-6" id="web-background">
    
                </div>

                <div class="col-md-6 droite_text">
    
                    <h2 class="service_titre"><span>Site web</span> <br> Site web sur-mesure</h2>

                    <p class="mt-5 mb-5">Nous créons des sites web performants qui plongent les êtres humains dans l'univers unique des marques en éveillant leur instinct.</p>

                    <a href="our-services/index.php#WEB" class="learn_btn">En savoir plus</a>

                </div>

            </div>
    
        </div>

        <!-- Projects Section 
        <div class="container" id="prjt_pg">

            <div style="display: inline-flex;">

                <h3>Discover our projects</h3>
                <div class="brdr"></div>

            </div>

            <div class="content-wrapper">

                <main class="grid-item main">

                    <div class="items">

                      <div class="item item1"></div>
                      <div class="item item2"></div>
                      <div class="item item3"></div>


                    </div>

                </main>

                
            </div>

            <div class="text-right">

                <h4>Hold & drag</h4>

            </div>

        </div> -->

        <!-- Advantages Section -->
        <div class="container mt-2 mb-5">

            <div class="row">

                <div class="col-md-5 droite_text">

                    <h2 class="service_titre text-left"><span>L'idée de rendre le monde meilleur est au cœur de tout ce que nous faisons.</span></h2>

                    <!-- <div class="btn-adv" style="display: inline-block;">

                        <a href="" class="Prec-btn">Previous</a>

                        <a href="" class="Suiv-btn">Next</a>

                    </div> -->

                </div>

                <div class="col-md-7 hmf">

                    <div class="slick-carousel">

                        <div>

                            <h1 class="service_titre">Pas de compromis sur la qualité.</h1>
                            <p>Nous ne voulons pas que notre marque soit associée à quelque chose qui ne soit pas de la plus haute qualité. Nous fabriquons des produits de qualité et nous donnons des conseils de qualité. Les gens qui veulent ce qu'il y a de mieux viennent chez nous pour une raison.</p>

                        </div>

                        <div>

                            <h1 class="service_titre">L'expérience est essentielle.</h1>
                            <p>Notre objectif a toujours été de créer des expériences agréables, intuitives, engageantes et remarquables pour les gens. Les expériences que nous créons sont ce qui nous distingue des autres.</p>

                        </div>

                        <div>

                            <h1 class="service_titre">Faire bien les choses.</h1>
                            <p>Nous ne faisons rien à moitié. Nous ne faisons les choses que de la bonne manière, avec soin, savoir-faire et effort.</p>

                        </div>

                    </div>

                    <a href="" class="Prec-btn">Précédent</a>

                    <a href="" class="Suiv-btn">Suivant</a>

                </div>

            </div>

        </div>

        <!-- CTA Section -->
        <div class="container-fluid mt-5" id="CTA">

            <div class="row">

                <div class="col-md-12 text-center">

                    <p>N'attendez plus!</p>

                    <h2>Donnez vie à votre projet</h2>

                    <a href="your-adventure/index.php">Parlez-nous de votre projet</a>

                </div>

            </div>

        </div>

        <button onclick="topFunction()" id="myTop" title="Go to top"><i class="ti-arrow-up"></i></button>

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

                    <p class="footp">Rejoindre la communauté</p>

                    <div class="mt-3">

                    <form role="form" id="newsletters-form" method="POST">

                        <input type="email" name="email" id="email" class="form-control inpuut" placeholder="Entrez votre email !" required>

                        <button type="submit" name="submit" class="form-control Join">Rejoindre</button>

                    </form>

                    </div>

                </div>

                <div class="col-md-3 text-left">

                    <p class="footp">Discutons ensemble</p>

                    <div class="discutons">

                        <a href="tel:+228 92 69 87 19">+228 92 69 87 19</a>

                        <br>

                        <a href="mailto:hello@datkominformatics.com">hello@datkominformatics</a>

                    </div>

                </div>

                <div class="col-md-3 text-right">

                    <div class="footp">

                        <a href="https://www.facebook.com/Datkom-Informatics-103544454610498/" class="mr-2">Facebook</a>

                        <a href="https://twitter.com/datkominfrmtics?s=20" class="mr-2">Twitter</a>

                        <a href="https://www.linkedin.com/company/datkom-informatics" class="mr-2">Linkedin</a>

                        <a href="https://www.instagram.com/datkom_informatics">Instagram</a>

                    </div>

                    <div class="mt-3">

                        <a href="legal-notice/index.php">Legal notice</a>

                        <br>

                        <a href="terms-of-use/index.php">Terms of use</a>

                        <br>

                        <a href="privacy-policy/index.php">Privacy policy</a>

                        <br>

                        <a href="sitemap/index.php">Site Map</a>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="design/js/main.min.js"></script>
    <script src="design/js/avtr.js"></script>
    <script src="design/js/cursor.js"></script>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js'></script>

    <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

            /*Theme Mode Setting*/
            let themeMode = sessionStorage.getItem("themeMode");

            $("#dark-toggle").click(
            function () {
                $('body').removeClass('light');
                $('body').addClass('dark');

                sessionStorage.setItem("themeMode", 'dark');
                document.getElementById("logo-abbr").src="design/img/logo/logo_bleu.png"
                document.getElementById("logo-compact").src="design/img/logo/logo_bleu.png"
                document.getElementById("nom_logo").src="design/img/nom/nom_blanc.png";

            })

            $("#light-toggle").click(
            function () {
                $('body').removeClass('dark');
                $('body').addClass('light');

                sessionStorage.setItem("themeMode", 'light');

                document.getElementById("logo-abbr").src="design/img/logo/logo_blanc.png";
                document.getElementById("logo-compact").src="design/img/logo/logo_blanc.png";
                document.getElementById("nom_logo").src="design/img/nom/nom_bleu.png";

            })

            if (themeMode == null) {
            sessionStorage.setItem("themeMode", 'dark'); //set default themeMode
            }

            if (themeMode == 'light') {
            $('body').addClass('light');
            $('body').removeClass('dark');
            sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="design/img/nom/nom_bleu.png";

            }

            if (themeMode == 'dark') {
            $('body').addClass('dark');
            $('body').removeClass('light');
            sessionStorage.setItem("themeMode", 'dark');

            document.getElementById("logo-abbr").src="design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="design/img/nom/nom_blanc.png";

            }

            //Footer

            $("#dark-toggle-footer").click(
            function () {
                $('body').removeClass('light');
                $('body').addClass('dark');

                sessionStorage.setItem("themeMode", 'dark');
                document.getElementById("logo-abbr").src="design/img/logo/logo_bleu.png"
                document.getElementById("logo-compact").src="design/img/logo/logo_bleu.png"
                document.getElementById("nom_logo").src="design/img/nom/nom_blanc.png";

            })

            $("#light-toggle-footer").click(
            function () {
                $('body').removeClass('dark');
                $('body').addClass('light');

                sessionStorage.setItem("themeMode", 'light');
                document.getElementById("logo-abbr").src="design/img/logo/logo_blanc.png"
                document.getElementById("logo-compact").src="design/img/logo/logo_blanc.png";
                document.getElementById("nom_logo").src="design/img/nom/nom_bleu.png";

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
            // vertical: true,
            // verticalSwiping: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: $('.Prec-btn'),
            nextArrow: $('.Suiv-btn') });

    </script>
    
    <script>

        var options = {
        strings: ['site', 'marque', 'avenir', 'marketing', 'projet'],
        typeSpeed: 400,
        backSpeed: 100,
        backDelay: 400,
        startDelay: 400,
        loop: true,
        };

        var typed = new Typed('.typed', options);

    </script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#newsletters-form').on('submit',function(e) {  //Don't foget to change the id form
 
                var email = $('#email').val();
                        
                if(email !=""){
                    $.ajax({

                        type:'POST',
                        url:'config/newsletters.php', //===PHP file name====
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

    <script type="text/javascript">

        let topBtn = document.querySelector('#myTop')

        topBtn.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth'})

        window.onscroll = () => window.scrollY > 500 ? topBtn.style.display = 'block' : topBtn.style.display = 'none'

    </script>

</body>