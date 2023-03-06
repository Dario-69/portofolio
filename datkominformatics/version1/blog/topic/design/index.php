<?php

  //DB Config
  require_once '../../../config/index.php';

  $q = "SELECT * FROM blog WHERE what = 'design' ";

  $sth = $pdo->prepare($q);
  $sth->execute();
  $blog = $sth->fetchAll();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../../design/img/logo/logo_bleu.png" type="image/x-icon">

    <link rel="stylesheet" href="../../../design/css/style.css">
    <link rel="stylesheet" href="../../../design/css/choice.css">
    <link rel="stylesheet" href="../../../design/css/color.css">
    <link rel="stylesheet" href="../../../design/css/blog.css">
    <link rel="stylesheet" href="../../../design/css/cursor.css">

    <link rel="stylesheet" href="../../../design/css/responsive.css">

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
        <div class="container-fluid" id="head-blog">

            <!-- Navigation -->
            <div class="container-fluid">
    
                <div class="row">
    
                    <div class="col-md-3 col-5">
    
                        <a href="../../../index.php" class="brand-logo">
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

                                    <li><a class="page-link" href="../../../index.php">Home</a></li>
            
                                    <li><a class="page-link" href="../../../our-agency/index.php">Notre agence</a></li>
            
                                    <li><a class="page-link" href="../../../our-services/index.php">Nos services</a></li>
            
                                    <li><a class="page-link" href="../../../contact/index.php">Contactez-nous !</a></li>
            
                                </ul>
            
                            </nav>

                        </div>

                        <div class="col-md-6" id="droite_nav">

                            <ul>

                                <nav class="overlay-menu">

                                    <ul>
    
                                        <li><a class="page-link-2" href="../../../portfolio/index.php">Portfolio</a></li>
                                                
                                        <li><a class="page-link-2" href="../../blog/index.php">Blog</a></li>
                
                                    </ul>
                
                                </nav>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Header CTA -->
            <div class="container-fluid">
    
                <div class="row" id="blog-top">

                    <div class="col-md-12 text-center">

                        <h1 class="blog_ttitre">Design</h1>

                    </div>
    
                </div>
    
            </div>
    
        </div>

        <div class="container droite_text mt-5">

            <!-- les autres post -->

            <div class="row mt-5">

                <div class="col-md-1"></div>

                <?php foreach ($blog as $blog_infos): ?>

                    <a href="../../post/index.php?id=<?= $blog_infos['id'];?>" class="col-md-5">

                        <img src="../../../admin/dashboard/blog/add/article/cover/<?php echo $blog_infos['cover']; ?>" alt="<?php echo $blog_infos['titre']; ?>" width="100%">

                        <br><br>

                        <span class="type_blog"><?php echo $blog_infos['what']; ?></span>

                        <h1 class="titre_blog"><?php echo $blog_infos['titre']; ?></h1>

                        <p class="prefix_blog"><?php echo $blog_infos['prefix']; ?></p>

                        <span class="date_blog"><?php echo $blog_infos['datepub']; ?></span>

                        <span class="time_blog"><?php echo $blog_infos['minlecture']; ?> Minutes</span>

                    </a>

                <?php endforeach ?>  

                <div class="col-md-1"></div>

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

                        <a href="../../../legal-notice/index.php">Legal notice</a>

                        <br>

                        <a href="../../../terms-of-use/index.php">Terms of use</a>

                        <br>

                        <a href="../../../privacy-policy/index.php">Privacy policy</a>

                        <br>

                        <a href="../../../sitemap/index.php">Site Map</a>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <script src="../../../design/js/main.min.js"></script>
    <script src="../../../design/js/avtr.js"></script>
    <script src="../../../design/js/cursor.js"></script>

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

        })

        $("#light-toggle").click(
        function () {
            $('body').removeClass('dark');
            $('body').addClass('light');

            sessionStorage.setItem("themeMode", 'light');

        })

        if (themeMode == null) {
        sessionStorage.setItem("themeMode", 'light'); //set default themeMode
        }

        if (themeMode == 'light') {
        $('body').addClass('light');
        $('body').removeClass('dark');
        sessionStorage.setItem("themeMode", 'light');

        document.getElementById("logo-abbr").src="../../../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../../../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../../../design/img/nom/nom_bleu.png";

        }

        if (themeMode == 'dark') {
        $('body').addClass('dark');
        $('body').removeClass('light');
        sessionStorage.setItem("themeMode", 'dark');

        document.getElementById("logo-abbr").src="../../../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../../../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../../../design/img/nom/nom_blanc.png";

        }

        //Footer

        $("#dark-toggle-footer").click(
        function () {
            $('body').removeClass('light');
            $('body').addClass('dark');

            sessionStorage.setItem("themeMode", 'dark');

            document.getElementById("logo-abbr").src="../../../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../../../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../../../design/img/nom/nom_blanc.png";

        })

        $("#light-toggle-footer").click(
        function () {
            $('body').removeClass('dark');
            $('body').addClass('light');

            sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="../../../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../../../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../../../design/img/nom/nom_bleu.png";

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
                url:'../../../config/newsletters.php', //===PHP file name====
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