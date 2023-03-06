<?php 

    require_once '../config/index.php';    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description -->
    <meta name="description" content="Donnez vie à votre projet">

    <!-- icon -->
    <link rel="shortcut icon" href="../assets/img/Brands/Logo-Blue.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/img/Brands/Logo-Blue.svg">

        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQ4S0NR52B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQ4S0NR52B');
    </script>


    <!-- Links -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">

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

    <!-- Header Nav -->

        <div class="head-top"></div>
        <div class="container-fluid" id="header-navbar">

            <div class="row">
    
                <div class="col-md-3 col-5">

                    <a href="../" class="brand-logo" data-stick-cursor>
                        <img id="logo-abbr" src="../assets/img/Brands/Logo-Blue.svg" alt="logo">
                        <img src="../assets/img/Brands/Typographie.svg" id="brand-title" alt="nom">
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

            <!-- Burger Navigation -->
            <div class="burgerMenu" id="overlay">

                <div class="container-fluid">

                    <div class="row justify-content-end">

                        <div class="col-md-9">
                            
                            <nav  class="overlay-menu">

                                <ul>

                                    <li><a href="../">L'agence</a></li>
            
                                    <li><a href="../dreamstudio/">Dream Studio</a></li>
            
                                    <li><a href="../contact/">Contact</a></li>

                                    <li><a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous">Prendre rendez-vous  <i data-feather="arrow-up-right"></i></a></li>

                                    <li><a href="">Démarrer un projet <i data-feather="arrow-right"></i></a></li>

            
                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <!-- Header Nav End -->

    <!-- Header CTA -->

        <div class="container-fluid"  id="homepage-header-cta">

            <div class="container header-cta">

                <div class="row">
    
                    <div class="col-md-9">
    
                        <h1>Parlez nous<br>de votre projet !</h1>
                        <em>N'hésitez pas à tout nous dire, on est là pour vous écouter, même les idées les plus folles.</em>

                    </div>
    
                </div>

                <div class="row mt-5">

                    <div class="col-md-md-12 text-center">

                        <a href="#contactForm"><i data-feather="arrow-down"></i></a>

                    </div>

                </div>

    
            </div>

        </div>

    <!-- Header CTA End -->

    <!-- Contact Form -->

        <div class="container mb-5" id="contactForm">

            <div class="row justify-content-center">

                <hr><br><br>

                <div class="col-md-10 col-12">


                    <form action="" method="post">

                        <input type="text" name="nom" id="" class="contact-input" placeholder="Votre nom complet"><br><br>

                        <input type="email" name="email" id="" class="contact-input" placeholder="Votre email"><br><br>

                        <select name="nos_services" id="" class="contact-input">

                            <option value="" selected="nos_services" disabled>Mon projet concerne...</option>

                            <optgroup label="Branding">

                                <option value="Identité de marque">Identité de marque</option>
                                <option value="Identité Visuelle">Identité Visuelle</option>
                                <option value="Logo design">Logo design</option>
                                <option value="Packaging design">Packaging design</option>

                            </optgroup>

                            <optgroup label="Design">

                                <option value="UI / UX design">UI / UX design</option>
                                <option value="Design graphic">Design graphic</option>

                            </optgroup>

                            <optgroup label="Marketing">

                                <option value="Strategie Marketing Digital">Strategie Marketing Digital</option>
                                <option value="Campagne de pub">Campagne de pub</option>

                            </optgroup>

                            <optgroup label="Web">

                                <option value="Site Vitrine">Site Vitrine</option>
                                <option value="Site E-commerce">Site E-commerce</option>
                                <option value="Intégration CMS">Intégration CMS</option>
                                <option value="Application web">Application web</option>

                            </optgroup>

                        </select>

                        <textarea name="contenu" id="" cols="30" rows="7" class="contact-textarea"  placeholder="Dites-nous en plus sur votre projet..."></textarea> <br><br>

                        <div class="text-end">

                            <button class="contact-btn">Annuler</button>
                            <button type="submit" name="submit" class="contact-btn" id="contact-submit">Envoyer</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    <!-- Contact Form End -->

    <br>

    <!-- Footer -->

        <footer>

            <div class="container">

                <div class="row">

                    <div class="col-md-4" id="footer-contact">

                        <a href="../"data-stick-cursor>
                            <img id="logo-abbr" src="../assets/img/Brands/Logo-White.svg" alt="logo">
                            <img src="../assets/img/Brands/Typographie-White.svg" id="brand-title" alt="nom">
                        </a>

                        <br><br>
                        <hr style="color: #fff;">

                        <a href="mailto:hello@datkominformatics.com"><i data-feather="mail"></i> hello@datkominformatics.com</a> <br>
                        <hr style="color: #fff;">
                        <a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous"><i data-feather="arrow-up-right"></i>Prendre un rendez-vous</a> <br>                        <hr style="color: #fff;">
                        <a href="">Démarrez un projet<i data-feather="arrow-right"></i></a>

                    </div>

                    <div class="col-md-4" id="liensPrincipales">

                        <a href="../">L'agence</a> <br>
                        <a href="../dreamstudio/">Dream Studio</a> <br>
                        <a href="../contact/">Contact</a>

                    </div>


                    <div class="col-md-4" id="liensUtiles">

                        <a href="../blog/">Blog</a> <br>
                         <a href="../newsletters/">Newsletters</a> <br>
 
                    </div>

                </div>

                <div class="row homepage-footer-juridical">

                    <div class="col-md-3">

                        <span>© <script>document.write(new Date().getFullYear())</script> DATKOM INFORMATICS</span>

                    </div>
                    <div class="col-md-9">

                        <a href="">Mentions Legales</a>
                        <a href="">Politique de confidentialité</a>

                    </div>

                </div>

            </div>

        </footer>

    <!-- Footer End -->


    <!-- JavaScript -->
    <script src="../assets/js/main.js"></script>

</body>
</html>
<?php 

  if(isset($_POST['submit'])){

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // 

    $nom = trim(addslashes($_POST['nom']));
    $email = trim($_POST['email']);
    $contenu = trim($_POST['contenu']);
    if(isset($_POST['nos_services'])){
        $services = $_POST['nos_services'];
    }

    if(empty($nom) && empty($email) && empty($contenu)){
      ?>
      
        <script>
          swal("Oops...", "les champs sont vides :(", "error");
        </script>

      <?php
    } else{

      $sql = "INSERT INTO `projets` (`nom`, `email`, `categorie`, `contenu`) VALUES('$nom','$email','$services','$contenu')";

      if (mysqli_query($conn, $sql)) {
        ?>

          <script>
            swal("Projet envoyé","Nous avons reçu votre message", "success");
          </script>

        <?php
      } 
      else {
        ?>

          <script>
            swal("Oops...", "Quelque chose s'est mal placée :(", "error");
          </script>

        <?php
      }
      mysqli_close($conn);

    }

  }


?>