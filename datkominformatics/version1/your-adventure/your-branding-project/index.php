<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../design/img/logo/logo_bleu.png" type="image/x-icon">

    <link rel="stylesheet" href="../../design/css/style.css">
    <!-- <link rel="stylesheet" href="../../design/css/choice.css">
    <link rel="stylesheet" href="../../design/css/color.css"> -->
        <link rel="stylesheet" href="../../design/css/form.css">
    <link rel="stylesheet" href="../../design/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>

    <div class="content">

        <div class="container-fluid mt-2">

            <div class="row">

                <div class="col-md-12 text-center">

                    <a href="../../index.php" class="text-center" data-stick-cursor>
                        <img src="../../design/img/logo/logo_bleu.png" alt="logo" width="3%">
                    </a>

                </div>

            </div>

        </div>
        
        <div class="container">
            
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10 mt-2 mb-5">

                    <form action="" id="form-project" method="POST" role="form">

                        <p id="form_p">

                            Bonjour, je m'appelle <input type="text" name="nom" id="nom" class="inpoot" placeholder="Ton nom complet"> et je veux discuter d'un projet potentiel.
                            Vous pouvez m'envoyer un email à <input type="email" name="email" id="email" class="inpoot" placeholder="Votre e-mail"> ou me joindre sur <input type="text" name="phone" id="phone" class="inpoot" placeholder="Votre numéro de téléphone">
                            <br><br>
                            Je m'intéresse à <select name="want" id="want" class="inpoot">
                                <option value=""></option>
                                <option value="Identité de marque">L'identité de marque</option>
                                <option value="Identité visuelle">L'identité visuelle</option>
                                <option value="Création de logo">La création de logo</option>
                                <option value="Conception d'emballages">La conception d'emballages</option>
                            </select>
                            <br>
                            Un petit mot sur mon projet <br> <textarea name="about" id="about" cols="30" rows="2" class="form-control inpoot" placeholder="Mon projet concerne..."></textarea>
                        
                        </p>

                        <input type="submit" name="submit" value="Envoyer" id="submit" class="form-control">

                    </form>

                </div>

            </div>

        </div>

        <div class="container-fluid" id="bottom_div">

            <div class="row">

                <div class="col-md-4 ">

                    <a href="../../index.php">Retour vers le site</a>

                </div>

                <div class="col-md-4"></div>

                <div class="col-md-4 text-right">

                    <a href="tel:+228 92 69 87 19" class="mb-1">+228 92 69 87 19</a> /
                    <a href="mailto:hello@datkominformatics.com">hello@datkominformatics.com</a>

                </div>

            </div>

        </div>

    </div>

    <script src="../../design/js/main.min.js"></script>
    <script src="../../design/js/avtr.js"></script>
    <script src="../../design/js/typed.js"></script>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js'></script>

    <script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
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

        $(document).ready(function(){

            $('#form-project').on('submit',function(e){

                var nom = $('#nom').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var want = $('#want').val();
                var about = $('#about').val();

                if(nom != "" && phone != "" && email != "" && about != "" && want != ""){

                    $.ajax({

                        type:'POST',
                        url:'../../config/branding.php', //===PHP file name====
                        data:{
                            nom : nom,
                            phone : phone,
                            email : email,
                            about : about,
                            want : want
                        },
                        cache : false,

                        success:function(dataResult){
                            var dataResult = JSON.parse(dataResult);
                            // console.log(data);
                            //Success Message == 'Title', 'Message body', Last one leave as it is
                            swal("Génial","Votre message a été envoyé ! nous vous contacterons dès que possible", "success")
                            if(dataResult.statusCode==200){
                                swal("Génial","Votre message a été envoyé ! nous vous contacterons dès que possible", "success");
                                return window.location.reload(); 
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

    <script>

        function goback() {
        window.history.back();
        }

    </script>

</body>
</html>