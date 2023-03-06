<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../design/img/logo/logo_bleu.png" type="image/x-icon">

    <link rel="stylesheet" href="../design/css/style.css">
    <link rel="stylesheet" href="../design/css/choice.css">
    <link rel="stylesheet" href="../design/css/color.css">
    <link rel="stylesheet" href="../design/css/form.css">
    <link rel="stylesheet" href="../design/css/cursor.css">
    <link rel="stylesheet" href="../design/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>

    <!-- cursor -->
    <div class="cursor" data-cursor><div></div></div>

    <div class="content">

        <!-- Let's start -->
        <!-- <div class="container-fluid">

            <div class="row">

                <a href="your-branding-project/index.php" class="col away" id="branding_away">Branding</a>
                <a href="your-design-project/index.php" class="col away" id="design_away">Design</a>
                <a href="your-marketing-project/index.php" class="col away" id="marketing_away">Marketing</a>
                <a href="your-web-project/index.php" class="col away" id="web_away">Web</a>
                <a href="your-project/index.php" class="col away" id="project_away">Complete project</a>

            </div>

        </div>

        <a id="closeBtn" onclick="goback()">Close</a> -->

        <br>

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h2>Que souhaitez-vous ?</h2>

                </div>

            </div>

        </div>

        <br>

        <div class="container">

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <div class="row" id="row_adventure">

                        <div class="col-md-9">

                            <h3>Branding</h3>
                            <span>Identité visuelle, Création de logo...</span>
                            <br>
                            <a href="your-branding-project/index.php">Demandez un devis</a>

                        </div>

                        <div class="col-md-3" id="branding_away"></div>

                    </div>

                    <br>

                    <div class="row" id="row_adventure">

                        <div class="col-md-9">

                            <h3>Design</h3>
                            <span>UX/UI, Conception...</span>
                            <br>
                            <a href="your-design-project/index.php">Demandez un devis</a>

                        </div>

                        <div class="col-md-3" id="design_away"></div>

                    </div>

                    <br>

                    <div class="row" id="row_adventure">

                        <div class="col-md-9">

                            <h3>Site web</h3>
                            <span>Vitrine, E-commerce...</span>
                            <br>
                            <a href="your-web-project/index.php">Demandez un devis</a>

                        </div>

                        <div class="col-md-3" id="web_away"></div>

                    </div>

                    <br>

                    <div class="row" id="row_adventure">

                        <div class="col-md-9">

                            <h3>Marketing digital</h3>
                            <span>Stratégie, Community management...</span>
                            <br>
                            <a href="your-marketing-project/index.php">Demandez un devis</a>

                        </div>

                        <div class="col-md-3" id="marketing_away"></div>

                    </div>

                    <br>

                    <div class="row" id="row_adventure">

                        <div class="col-md-9">

                            <h3>Projet complet</h3>
                            <span>Une création complète</span>
                            <br>
                            <a href="your-project/index.php">Demandez un devis</a>

                        </div>

                        <div class="col-md-3" id="project_away"></div>

                    </div>

                    <br>

                </div>

                <div class="col-md-1"></div>

            </div>

        </div>

        <a id="closeBtn" onclick="goback()">&times;</a>

    </div>

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
        sessionStorage.setItem("themeMode", 'dark'); //set default themeMode
        }

        if (themeMode == 'light') {
        $('body').addClass('light');
        $('body').removeClass('dark');
        sessionStorage.setItem("themeMode", 'light');

        }

        if (themeMode == 'dark') {
        $('body').addClass('dark');
        $('body').removeClass('light');
        sessionStorage.setItem("themeMode", 'dark');

        }

        //Footer

        $("#dark-toggle-footer").click(
        function () {
            $('body').removeClass('light');
            $('body').addClass('dark');

            sessionStorage.setItem("themeMode", 'dark');

        })

        $("#light-toggle-footer").click(
        function () {
            $('body').removeClass('dark');
            $('body').addClass('light');

            sessionStorage.setItem("themeMode", 'light');

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

        function goback() {
        window.history.back();
        }

    </script>
    
</body>
</html>