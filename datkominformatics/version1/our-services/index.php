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
    <meta name="description" content="Découvrez nos services sur mesure, création de votre site vitrine ou e-commerce, développement de votre app, webdesign et élaboration de votre stratégie digitale">

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
    <link rel="stylesheet" href="../design/css/services.css">
    <link rel="stylesheet" href="../design/css/cursor.css">

    <link rel="stylesheet" href="../design/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>

    <!-- cursor -->
    <div class="cursor" data-cursor><div></div></div>

    <!-- content -->
    <div class="content">

        <!-- Header Section -->
        <div class="container-fluid" id="head">

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
            
                                    <li><a class="page-link" href="../our-agency/index.php">Notre agence</a></li>
            
                                    <li><a class="page-link" href="#">Nos services</a></li>
            
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
            <div class="container-fluid">

                <div class="container" id="service_titre">

                    <div class="row">

                        <div class="col-md-12 text-center" >

                            <h1 id="WWD">Que faisons-nous ?</h1>
                
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="container droite_text">

            <div class="row minimalist">

                <div class="col-md-5">

                    <span class="mini_span">Laissez-moi vous dire</span>

                    <div class="bordr"></div>

                </div>

                <div class="col-md-7">

                    <p>Nous préparons soigneusement la création de nos sites - nous collectons des informations, posons des milliers de questions au client et à nous-mêmes, cherchons, réfléchissons, esquissons des options, dessinons pour marquer des points.</p>

                </div>


            </div>

            <!-- Branding -->
            <div class="row minimalist" id="BRANDING">

                <div class="col-md-9">

                    <h1 class="service_s">Branding</h1>

                    <p class="mt-5 mb-3">Votre marque détermine la façon dont un utilisateur perçoit votre entreprise. Notre mission est d'aider visuellement et stratégiquement les entreprises à accroître leur présence sur le web. Nous travaillerons en étroite collaboration avec vous pour construire votre identité de marque, qui reflétera ce qu'est votre entreprise.</p>

                    <div class="mb-5">

                        <ul>

                            <li class="li_services _branding"><img src="../design/img/illustrations/Services/brand.svg" alt="Branding" class="services_img"> Identité de marque</li><br>
                            <li class="li_services _branding"><img src="../design/img/illustrations/Services/brand.svg" alt="Branding" class="services_img"> Identité visuelle</li><br>
                            <li class="li_services _branding"><img src="../design/img/illustrations/Services/brand.svg" alt="Branding" class="services_img"> Création de logo</li><br>
                            <li class="li_services _branding"><img src="../design/img/illustrations/Services/brand.svg" alt="Branding" class="services_img"> Conception d'emballages</li>

                        </ul>

                    </div>

                    <a href="../your-adventure/your-branding-project/index.php" class="learn_btn">Demander un devis</a>

                </div>

                <div class="col-md-3">

                </div>

            </div>

            <!-- Design -->
            <div class="row minimalist" id="DESIGN">

                <div class="col-md-3"></div>

                <div class="col-md-9">

                    <h1 class="mt-5 service_s">Design</h1>

                    <p class="mt-5 mb-5">Chacun de nos designs est unique, c'est-à-dire sans modèle et sans travail recyclé. Nous voulons nous assurer que la vision de chaque client est représentée sous sa forme la plus fidèle, c'est pourquoi nous commençons par le début. Notre processus varie d'un client à l'autre et est organisé en phases. Ne vous inquiétez pas, nous vous expliquerons tout cela au cours du processus.</p>

                    
                    <div class="mb-5">

                        <ul>

                            <li class="li_services _design"><img src="../design/img/illustrations/Services/design-thinking.svg" alt="Design" class="services_img"> UI / UX design</li><br>
                            <li class="li_services _design"><img src="../design/img/illustrations/Services/design-thinking.svg" alt="Design" class="services_img"> Prototypage / Wireframes</li><br>
                            <li class="li_services _design"><img src="../design/img/illustrations/Services/design-thinking.svg" alt="Design" class="services_img"> Responsive design</li><br>
                            <li class="li_services _design"><img src="../design/img/illustrations/Services/design-thinking.svg" alt="Design" class="services_img"> Conception graphique</li>

                        </ul>

                    </div>

                    <a href="../your-adventure/your-design-project/index.php" class="learn_btn">Demander un devis</a>

                </div>

            </div>

            <!-- Web -->
            <div class="row minimalist" id="WEB">

                <div class="col-md-9">

                    <h1 class="mt-5 service_s">Site Web</h1>

                    <p class="mt-5 mb-5">Comme nous sommes des penseurs créatifs, notre code est toujours personnalisé. Nous profitons du développement personnalisé pour nous assurer que votre site Web est pris en charge sur tous les navigateurs / appareils avec des interactions amusantes et engageantes. Parce que nous voulons que vous soyez le meilleur.</p>

                    <div class="mb-5">

                        <ul>

                            <li class="li_services _web"><img src="../design/img/illustrations/Services/website.svg" alt="Web" class="services_img"> Landing Page / Site Vitrine</li><br>
                            <li class="li_services _web"><img src="../design/img/illustrations/Services/website.svg" alt="Web" class="services_img"> E-commerce</li><br>
                            <li class="li_services _web"><img src="../design/img/illustrations/Services/website.svg" alt="Web" class="services_img"> CMS (WordPress, Shopify...)</li><br>
                            <li class="li_services _web"><img src="../design/img/illustrations/Services/website.svg" alt="Web" class="services_img"> Application web</li><br>
                            <li class="li_services _web"><img src="../design/img/illustrations/Services/website.svg" alt="Web" class="services_img"> Site web sur-mesure</li>

                        </ul>

                    </div>

                    <a href="../your-adventure/your-web-project/index.php" class="learn_btn">Demander un devis</a>

                </div>

            </div>

            <!-- Marketing -->
            <div class="row minimalist" id="MARKETING">

                <div class="col-md-3"></div>

                <div class="col-md-9">

                    <h1 class="mt-5 service_s">Marketing digital</h1>

                    <p class="mt-5 mb-5">Notre objectif n'est pas seulement d'attirer des visiteurs sur votre site, mais d'attirer le bon type de visiteurs sur votre site. Nous adoptons une approche du marketing qui commence par la recherche et la stratégie, où nous vous aidons à développer un contenu de valeur et convaincant qui correspond à votre marque et se connecte avec votre public cible.</p>

                    
                    <div class="mb-5">

                        <ul>

                            <li class="li_services _marketing"><img src="../design/img/illustrations/Services/digital.svg" alt="Digital Marketing" class="services_img"> Stratégie de marketing digital</li><br>
                            <li class="li_services _marketing"><img src="../design/img/illustrations/Services/digital.svg" alt="Digital Marketing" class="services_img"> Campagne publicitaire sociale</li><br>
                            <li class="li_services _marketing"><img src="../design/img/illustrations/Services/digital.svg" alt="Digital Marketing" class="services_img"> Gestion de communauté (Instagram, Facebook, Twitter...)</li>

                        </ul>

                    </div>

                    <a href="../your-adventure/your-marketing-project/index.php" class="learn_btn">Demander un devis</a>

                </div>

            </div>

            <!-- Comment nous travaillons -->
            <div class="row">

                <div class="col-md-10 mt-3">

                    <span class="mini_span">Et maintenant, un peu plus de détails</span>

                    <h1>Comment nous travaillons</h1>

                    <div class="bordr"></div>

                </div>

            </div>
            
            <div class="row minimalist">

                <div class="col-md-9">

                    <h2 class="service_s">Nous commençons par un entretien personnel</h2>

                    <p>
                      La première étape de toute collaboration réussie est d'apprendre à se connaître. Nous vous rencontrons et échangeons des informations sur vous et votre entreprise afin de créer une meilleure image de votre activité. Ensemble, nous élaborons une solution adaptée à votre entreprise. Nous ne proposons pas de solutions toutes faites.
                    </p>

                </div>

                <div class="col-md-3">

                    <img src="../design/img/illustrations/Meeting.png" alt="Meeting" width="100%">

                </div>

            </div>

            <div class="row minimalist">

                <div class="col-md-3">

                    <img src="../design/img/illustrations/Audience.png" alt="Audience" width="100%">

                </div>

                <div class="col-md-9">

                    <h2 class="service_s">Ensuite, nous trouvons le public cible</h2>

                    <p>
                        Afin de maximiser l'impact, nous devons comprendre qui est votre public cible. Nous dressons donc un portrait des clients potentiels de votre entreprise, en explorant chaque détail.
                    </p>
                </div>

            </div>

            <div class="row minimalist">

                <div class="col-md-9">

                    <h2 class="service_s">Brainstorming</h2>

                    <p>
                        Notre créativité est motivée par l'innovation. Grâce à des recherches approfondies, nous trouvons de nouvelles façons de résoudre les problèmes, de rendre les choses plus utiles et d'aider votre public cible à mieux s'identifier à votre marque.
                    </p>

                </div>

                <div class="col-md-3">

                    <img src="../design/img/illustrations/Brainstorm.png" alt="Brainstom" width="100%">

                </div>

            </div>

            <div class="row minimalist">

            <div class="col-md-3">

                <img src="../design/img/illustrations/Design-flat.png" alt="Design" width="100%">

            </div>

                <div class="col-md-9">

                    <h2 class="service_s">Nous créons le design</h2>

                    <p>
                        Après le "brainstorming", nous nous attelons à la création d'un design qui nous mènera au but. Branding créatif, visuels non standard, couleurs et slogans sont parfaitement combinés en fonction de votre image.
                    </p>

                </div>

            </div>

            <div class="row minimalist">

                <div class="col-md-9">

                    <h2 class="service_s">Nous créons une application Web</h2>

                    <p>
                        Étape par étape, nous concrétisons le design. Nous imaginons des moyens pour l'utilisateur et l'administrateur. Nous créons des fonctionnalités qui mènent au but. Nous le faisons avec amour et nous en sommes fiers.
                    </p>

                </div>

                <div class="col-md-3">

                    <img src="../design/img/illustrations/web-illustration.png" alt="Web" width="100%">

                </div>

            </div>

            <div class="row minimalist">

            <div class="col-md-3">

                <img src="../design/img/illustrations/Marketing-illustration.png" alt="Marketing" width="100%">

            </div>

                <div class="col-md-9">

                    <h2 class="service_s">Nous proposons un marketing créati</h2>

                    <p>
                        L'image de marque est bonne, le marketing fonctionne, la créativité vous rendra célèbre. Une stratégie publicitaire qui combine ces trois facteurs crée un mouvement explosif !
                    </p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12 text-center">

                    <span class="mini_span">Et maintenant que nous nous sommes rapprochés les uns des autres</span>

                </div>

            </div>

        </div>

        <!-- CTA Section -->
        <div class="container-fluid" id="CTA">

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

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js'></script>

    <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
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