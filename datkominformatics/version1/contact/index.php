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
    <meta name="description" content="Contactez dès maintenant l&#039;Agence DATKOM-INFORMATICS pour la réalisation de vos projets. Nous proposons plusieurs pack jusqu&#039;au business clé en main."/>
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
    <link rel="stylesheet" href="../design/css/contact.css">
    <link rel="stylesheet" href="../design/css/cursor.css">
    <link rel="stylesheet" href="../admin/dashboard/assets/icons/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="../design/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>

    <!-- cursor -->
    <div class="cursor" data-cursor><div></div></div>

    <!-- content -->
    <div class="content mb-5">

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

                                    <li><a class="page-link" href="../index.php">Home</a></li>
            
                                    <li><a class="page-link" href="../our-agency/index.php">Notre agence</a></li>
            
                                    <li><a class="page-link" href="../our-services/index.php">Nos services</a></li>
            
                                    <li><a class="page-link" href="#">Contactez-nous !</a></li>

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
    
                <div class="row">

                    <div class="col-md-12 text-center">
 
                        <div class="ticker-wrap">

                            <div class="ticker">
                        
                              <div class="ticker__item">Hello</div>
                              
                              <div class="ticker__item">Bonjour</div>
                              
                              <div class="ticker__item">Holà</div>
                              
                              <div class="ticker__item">Morgen</div>
                        
                            </div>
                        
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>

        <div class="container">

            <div class="row minimalist">

                <div class="col-md-5 droite_text">

                    <span class="mini_span">Vous aimeriez nous parler d'un projet ? N'hésitez pas à nous contacter. Nous serons ravis de vous aider.</span>

                    <br><br>

                    <div>

                        <a href="tel:+228 92 69 87 19" class="discutons-contact">+228 92 69 87 19</a>

                        <br>
    
                        <a href="mailto:hello@datkominformatics.com" class="discutons-contact">hello@datkominformatics</a>

                    </div>

                </div>

                <div class="col-md-7">

                    <h1 class="let-start droite_text">Nous contacter</h1>

                    <form action="" method="POST" id="contact-form" role="form">

                        <div class="form-row">

                            <div class="col">

                                <label for="">Nom & Prénom<span>*</span></label>
                                <input type="text" name="nom" id="nom" class="form-control inpuut" required>

                            </div>

                            <div class="col contact_input">

                                <label for="">Téléphone<span>*</span></label>
                                <input type="tel" name="phone" id="phone" class="form-control inpuut" required>

                            </div>

                        </div> <br>

                        <label for="">E-mail<span>*</span></label>
                        <input type="email" name="cemail" id="email" class="form-control inpuut" required>

                        <br>

                        <label for="">Votre message<span>*</span></label>
                        <textarea name="message" id="message" cols="30" rows="2" class="form-control inpuut" required></textarea>

                        <br>
                        <button type="submit" name="submit" id="send">Envoyer</button>
                        

                    </form>

                </div>

            </div>

            <div class="row">

                <div class="col-md-8">

                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.801057335124!2d1.2368579480307558!3d6.136298314409832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e196b3c35759%3A0x4825150dd8c97614!2sRue%20Zizin%2C%20Lom%C3%A9!5e0!3m2!1sfr!2stg!4v1585840444692!5m2!1sfr!2stg"
                    width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0" ></iframe>

                </div>

                <div class="col-md-4 droite_text">

                    <span class="mini_span">Toujours disponible</span>
                    <h1>118, Rue Zizin</h1>
                    <p>Nous vivons dans une capitale audacieuse.<br>La ville des inventeurs, des designers, des étudiants, des révolutionnaires et des meilleures personnes</p>

                </div>

            </div>

        </div>

    </div>

    <hr>
    
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

                        <form action="" method="POST" id="newsletters-form" role="form">

                            <input type="email" name="email" id="email-news" class="form-control inpuut" placeholder="Entrez votre email !">
                            
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

    <!-- Newsletters process -->
    <script type="text/javascript">

        $(document).ready(function(){

            $('#newsletters-form').on('submit',function(e) {  //Don't foget to change the id form

                var email = $('#email-news').val();
                        
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

    <!-- Contact process -->
    <script>

        $(document).ready(function(){

            $('#contact-form').on('submit',function(e){

                var nom = $('#nom').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var message = $('#message').val();

                if(nom != "" && phone != "" && email != "" && message != ""){

                    $.ajax({

                        type:'POST',
                        url:'../config/contact.php', //===PHP file name====
                        data:{
                            nom : nom,
                            phone : phone,
                            email : email,
                            message : message
                        },
                        cache : false,

                        success:function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            // console.log(data);
                            //Success Message == 'Title', 'Message body', Last one leave as it is
                            swal("Awesome","Your message has been sent", "success")
                            if(dataResult.statusCode==200){
                                swal("Awesome","", "success")
                            }
                            else if(dataResult.statusCode==201){
                                swal("Oops...", "Quelque chose a mal tourné :(", "error");
                            }
                        },

                        error:function(data){
                            //Error Message == 'Title', 'Message body', Last one leave as it is
                            swal("Oops...", "Quelque chose a mal tourné :(", "error");
                        }

                    })

                }
                else{
                    swal("Oops...", "les champs sont vides :(", "error");
                }

                e.preventDefault();

            });

        });

    </script>

</body>
</html>