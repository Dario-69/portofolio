<?php

    //
    require_once '../config/index.php';

    if(isset($_POST['submit'])){
     
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(empty($nom) || empty($email) || empty($message)){

        }else{

            $sql = "INSERT INTO `messages`(`nom`, `email`, `message`) VALUES (:nom,:email,:message)";
            $query = $pdo->prepare($sql);

            if($query->execute(array(':nom'=>$nom,':email'=>$email,':message'=>$message))){
                ?>
                <script type="text/javascript">
                    alert('messages added successfully');                
                </script>
              <?php
            }

        }

    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact - Elwinakof</title>
</head>
<body>

    <!-- Navigation -->
    <div id="myNav" class="overlay">

            <div class="container">

                <div class="row mt-5">

                    <div class="col-md-4 col-5">

                        <a href="../index.php"><h1 id="logo_2">ELWINAKOF</h1></a>

                    </div>

                    <div class="col-md-8 col-7 text-right">

                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">fermer &times;</a>

                    </div>

                </div>

                <div class="row mt-5">

                    <div class="col-md-6" id="MyNavA">

                        <a href="../les-proprietes/index.php">Les propriétés</a>

                        <a href="../nos-services/index.php">Nos services</a>

                        <a href="../a-propos-de-nous/index.php">à propos de nous</a>

                        <a href="#">Contact</a>

                    </div>

                </div>

            </div>

    </div>

    <div class="container-fluid" id="navbar">

        <div class="row mt-2 mb-2">

            <div class="col-md-4 col-3">

                <a href="../index.php"><h1 id="logo">ELWINAKOF</h1></a>

            </div>

            <div class="col-md-6 col-6"></div>

            <div class="col-md-2 col-3" id="header_actions">

                <a href="../les-proprietes/index.php" id="lesproprietes">Les propriétés</a>

                <div class="button_container" onclick="openNav()">

                    <span class="top"></span>
                    <span class="middle"></span>
                    <span class="bottom"></span>

                </div>

            </div>

        </div>

    </div>
    
    <div class="content">

        <div class="container-fluid"  id="whoare">

            <div class="row">

                <div class="col-md-12">

                    <h1 id="who">Envoyez-nous un e-mail ou appelez-nous si vous voulez parler d'achat ou de vente d'une maison ou d'un terrain, location d'une maison.</h1>
                    
                </div>

            </div>

        </div>

        <div class="container">

            <div class="row mt-5 mb-5">

                <div class="col-md-8">

                    <h1>Contactez-nous</h1>

                </div>

            </div>

            <div class="row">

                <div class="col-md-8">

                    <form action="" method="post">

                        <div class="group">      
                            <input type="text" name="nom" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Votre nom</label>
                        </div>

                        <br>

                        <div class="group">      
                            <input type="email" name="email" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Votre adresse e-mail</label>
                        </div>

                        <br>

                        <div class="group">      
                            <textarea name="message" id="" cols="30" rows="5"></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Votre message</label>
                        </div>

                        <button type="submit" name="submit" class="btnt startbtn2">Envoyer le message</button>

                    </form>

                </div>

                <div class="col-md-4" id="venez">

                    <div>

                        <h4>Venez discuter</h4>
                        <p>Lomé, TOGO</p>

                    </div>

                    <div>

                        <h4>Nous sommes ouverts</h4>
                        <p>Lundi <span class="pl-3 horaire">09.00 - 17.00</span></p>
                        <p>Mardi <span class="pl-3 horaire">09.00 - 17.00</span></p>
                        <p>Mercredi <span class="pl-3 horaire">09.00 - 17.00</span></p>
                        <p>Jeudi <span class="pl-3 horaire">09.00 - 17.00</span></p>
                        <p>Vendredi <span class="pl-3 horaire">09.00 - 17.00</span></p>
                        <p>Samedi <span class="pl-3 horaire">09.00 - 17.00</span></p>

                    </div>

                </div>

            </div>

        </div>

        <div class="container-fluid mt-5">

            <div class="row" id="noscontacts">

                <div class="col-md-8 text-center" id="email">

                    <a href="mailto:"><h1>contact@elwinakof.com</h1></a>

                </div>

                <div class="col-md-4 text-center" id="phone">

                    <a href="tel:+22890231712"><h1>+228 90 23 17 12</h1></a>

                </div>

            </div>

        </div>

    </div>

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <h3>Elwinakof</h3>

                </div>

                <div class="col-md-3"></div>

                <div class="col-md-3 text-right">

                    <h3>Compagnie</h3>

                    <a href="../nos-services/index.php">Nos services</a> <br>

                    <a href="../contact/index.php">Nous Contactez</a> <br>

                    <a href="../a-propos-de-nous/index.php">À propos de nous</a>

                </div>

                <div class="col-md-3 text-right">

                    <h3>Nos liens</h3>

                    <a href="../faq/index.html">FAQ</a> <br>

                    <a href="../politique/index.html">Politique</a> <br>

                    <a href="../condition/index.html">Condition</a> 

                </div>

            </div>

        </div>

    </footer>
    <script>

        /* Open */
        function openNav() {
        document.getElementById("myNav").style.height = "100%";
        }

        /* Close */
        function closeNav() {
        document.getElementById("myNav").style.height = "0%";
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>