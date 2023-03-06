<?php

  //DB Config
  require_once '../../config/index.php';

  if(isset($_GET['id'])){

    $id = $_GET['id'];

    if(empty($id)) {
				
		if(empty($titre)) {
			error_log("<font color='red'>Collection ID is not set</font><br/>");
		}

	}else{

        $sql = "SELECT * FROM `portfolio` WHERE id = '".$id."'";

        $sth = $pdo->prepare($sql);
        $sth->execute();
  
        $projects_infos = $sth->fetch(PDO::FETCH_ASSOC);

    }

  }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../design/img/logo/logo_bleu.png" type="image/x-icon">

    <link rel="stylesheet" href="../../design/css/style.css">
    <link rel="stylesheet" href="../../design/css/choice.css">
    <link rel="stylesheet" href="../../design/css/color.css">
    <link rel="stylesheet" href="../../design/css/pages.css">
    <link rel="stylesheet" href="../../design/css/study.css">
    <link rel="stylesheet" href="../../design/css/cursor.css">

    <link rel="stylesheet" href="../../design/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>

    <!-- cursor -->
    <div class="cursor" data-cursor><div></div></div>

    <div class="content">

        <div class="cover" style="background-image: url('../../admin/dashboard/portfolio/add/projects/cover/<?php echo $projects_infos['cover']; ?>')">

            <h1 id="titre_study"><?php echo $projects_infos['nom']; ?></h1>

        </div>

        <div class="container mt-5">

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <h3><?php echo $projects_infos['nom']; ?> | <span class="what_span"><?php echo $projects_infos['what']; ?></span> </h3>
                    <br>
                    <h6 class="about_h"><?php echo $projects_infos['about']; ?></h6>
                    <br>

                    <img src="../../admin/dashboard/portfolio/add/projects/images/<?php echo $projects_infos['img_un']; ?>" alt="<?php echo $projects_infos['nom']; ?> Portfolio" width="100%">
                    <img src="../../admin/dashboard/portfolio/add/projects/images/<?php echo $projects_infos['img_deux']; ?>" alt="<?php echo $projects_infos['nom']; ?> Portfolio" width="100%">
                    <img src="../../admin/dashboard/portfolio/add/projects/images/<?php echo $projects_infos['img_trois']; ?>" alt="<?php echo $projects_infos['nom']; ?> Portfolio" width="100%">
                    <img src="../../admin/dashboard/portfolio/add/projects/images/<?php echo $projects_infos['img_quatre']; ?>" alt="<?php echo $projects_infos['nom']; ?> Portfolio" width="100%">

                    <br><br><br>

                    <a href="<?php echo $projects_infos['lienprojet']; ?>" class="lien_web_pro"><?php echo $projects_infos['nom']; ?><ion-icon name="arrow-forward-outline"></ion-icon></a>

                    <br><br><br><br><br>

                    <a href="https://www.datkominformatics.com" class="goback">Go back to datkominformatics</a>

                </div>

                <div class="col-md-1"></div>

            </div>

        </div>

        <br><br><br><br>

        <!-- CTA -->

        <div class="container-fluid" id="CTA-Ready">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <h1 id="ready">Ready to<br>discuss your<br>next project ?</h1>

                    </div>

                    <div class="col-md-6">

                        <a href="mailto:hello@datkominformatics.com" class="getquote">Get in touch</a>

                    </div>

                </div>

            </div>

        </div>


    </div>


    <script src="../../design/js/main.min.js"></script>
    <script src="../../design/js/avtr.js"></script>
    <script src="../../design/js/cursor.js"></script>

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


        //Modal-Portfolio
        function myPopup() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
        }

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
                            swal("Awesome","", "success")
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

                    });
                }
                else{
                    swal("Oops...", "Quelque chose a mal tourné :(", "error");
                }
                
                e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"

            });

        });

    </script>

</body>
</html>