<?php 

    require_once '../../config/index.php';
    session_start();

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

    <!-- Links -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/main.css">

    <!-- CNDs -->

        <!-- icons -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Slick -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
        <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <!--  -->

    <title>datkominformatics • Agence web créative</title>
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

    <!--  -->

        <div class="container-fluid mt-5">

            <div class="container mt-5">

                <div class="row">
    
                    <div class="col-md-12 text-center">

                        <h1 class="homepage-valeurs-heart">L'aventure commence ici.</h1>
                        <p>Alors Champion, crée un compte !</p>

                    </div>
    
                </div>

                <div class="row mt-5 justify-content-center">

                    <div class="col-md-9">

                        <form action="" method="post">

                            <input type="text" name="nom" id="" class="contact-input" placeholder="Votre nom complet"><br><br>

                            <input type="email" name="email" id="" class="contact-input" placeholder="Votre email"><br><br>
                            
                            <input type="password" name="password" id="" class="contact-input" placeholder="Votre mot de passe"><br><br>

                            <div class="text-end">

                                <button type="submit" name="submit" class="contact-btn" id="contact-submit">Connexion</button>

                            </div>

                        </form>

                    </div>

                </div>
    
            </div>

        </div>

    <!--  -->


    <!-- JavaScript -->
    <script>
        $(window).on("load", function(){ 
            // Preloader 
            $('#loader').fadeOut('slow');
            $('.ios-loader').fadeOut('slow'); 
        });
    </script>

</body>
</html>
<?php

    // Process form when post submit
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Sanitize POST
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //

        $nom =  trim($_POST['nom']);

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn,$email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);

        if(empty($nom) && empty($email) && empty($password)){
            ?>

                <script>
                    swal("Oops...", "les champs sont vides :(", "error")
                </script>;

            <?php
        }else{

            
            //Connexion principal admin
            $query_admin = "INSERT into `users`(nom, email, motpasse) VALUES('$nom', '$email', '".md5($password)."')";
            $results = mysqli_query($conn, $query_admin) or die(mysql_error());

            if($results){

                $_SESSION['email'] = $email;
                // Redirect admin dashboard
	            header("Location: ../dashboard/");

            }else{

                ?>

                    <script>
                        swal("Oops...", "Quelque chose s'est mal placée :(", "error");
                    </script>

                <?php

            }


        }

    }

?>