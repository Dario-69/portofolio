<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Design/Outils/all.min.css">
    <link rel="stylesheet" href="../Design/Outils/animate.min.css">
    <link rel="stylesheet" href="../Design/Outils/bootstrap.css">

    <link rel="stylesheet" href="../Design/CSS/style.css">
    <link rel="stylesheet" href="../Design/CSS/services.css">
    <link rel="stylesheet" href="../Design/CSS/formulaire.css">
    <link rel="stylesheet" href="../Design/CSS/index.css">
    <link rel="stylesheet" href="../Design/CSS/responsive.css">

    <link rel="apple-touch-icon" sizes="180x180" href="../Design/Img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../Design/Img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../Design/Img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../Design/Img/favicon_io/site.webmanifest">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <title>BlingBlingServices - Services</title>
</head>
<body>

    <header>

        <div class="container-fluid" id="entete_devis">

            <div class="row pb-0 pt-2">
    
                <div class="col-md-12 col-12 text-center">
    
                    <p>Appelez-nous pour un devis au : <a href="tel:+22893203871">+228 93 20 38 71</a></p>
    
                </div>
    
            </div>
    
        </div>
    
        <div class="container-fluid" id="navigation">
    
            <div class="row">
    
                <div class="col-md-2 col-5">
    
                    <a href="../index.php"><img src="../Design/Img/logo_blanc.png" alt="" width="100%"></a>

                </div>
    
                <div class="col-md-8 col-4"></div>
    
                <div class="col-md-2 col-3 text-right">
    
                    <div class="button_container" id="toggle">
    
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
    
                    </div>
    
                </div>
    
            </div>
    
            <!-- Navigation -->
    
            <div class="overlay" id="overlay">
    
                <nav class="overlay-menu">
            
                    <ul>
            
                        <li><a class="page-link" href="../index.php">Accueil</a></li>
                                    
                        <li><a class="page-link" href="../Notre-entreprise/index.html">Notre entreprise</a></li>
            
                        <li><a class="page-link" href="../Nos-services/index.html">Nos Services</a></li>
            
                        <li><a class="page-link" href="../Contactez-nous/index.php">Contactez-nous</a></li>
            
                    </ul>
            
                </nav>
            
            </div>
    
        </div>

    </header>

    <section id="section_01">

        <div class="container-fluid">

            <div class="container">
    
                <div class="row">
    
                    <div class="col-md-12 text-center">
        
                        <h1 class="mt-5 contact">Que souhaitez-vous ?</h1>
                        
                    </div>
        
                </div>
    
            </div>
    
        </div>

    </section>

    <div class="container mt-4">

        <div class="row">

            <div class="col-md-12 col-12 mt-1">

                <form action="" method="post">

                    <div class=" radio-tile-group mb-5">

                        <div class="input-container">

                            <input type="radio" id="radio-1" class="radio-button" name="service" value="Lavage à sec">
                            <div class="radio-tile">

                                <label for="radio-1" class="radio-tile-label">Lavage à sec</label>

                            </div>

                        </div>

                        <div class="input-container">

                            <input type="radio" id="radio-2" class="radio-button" name="service" value="Décoration d'intérieur">
                            <div class="radio-tile">

                                <label for="radio-2" class="radio-tile-label">Décoration d'intérieur</label>
                  
                            </div>
                            
                        </div>

                        <div class="input-container">

                            <input type="radio" id="radio-3" class="radio-button" name="service" value="Ameublement">
                            <div class="radio-tile">

                                <label for="radio-3" class="radio-tile-label">Ameublement</label>

                            </div>

                        </div>

                    </div>

                    <h1 class="mb-5 text-center">Vos informations et c'est bon !</h1>

                    <div class="form-row">

                        <div class="col">

                            <div class="text-left">
                                <label for="">Votre nom</label>
                            </div>

                            <input type="text" name="nom" id="" class="form-control ifc">

                        </div>

                        <div class="col">

                            <div class="text-left">
                                <label for="">Votre prénom</label>
                            </div>

                            <input type="text" name="prenom" id="" class="form-control ifc">

                        </div>

                    </div> <br>

                    <div class="text-left">
                        <label for="">Votre téléphone</label>
                    </div>
                    <input type="tel" name="num" id="" class="form-control ifc">

                    <br>

                    <div class="text-left">
                        <label for="">Votre adresse e-mail</label>
                    </div>
                    <input type="email" name="email" id="" class="form-control ifc">

                    <br>

                    <div class="text-left">
                        <label for="">Votre entreprise <span>( facultatif )</span></label>
                    </div>
                    <input type="text" name="entreprise" id="" class="form-control ifc">

                    <br>

                    <div class="text-left">
                        <label for="">A quel date souhaitez-vous debutez votre projet ?</label>
                    </div>
                    <input type="date" name="date_debut" id="" class="form-control ifc">

                    <br><br>

                    <button type="submit" name="submit_service" class="form-control sub_mit">Valider</button>

                </form>

            </div>

        </div>

    </div>

    <?php include_once '../config/index.php';


    if(isset($_POST['submit_service'])){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['num'];
        $email = $_POST['email'];
        $entreprise = $_POST['entreprise'];
        $services = $_POST['service'];
        $date_debut = $_POST['date_debut'];


        if(empty($nom) || empty($email)){
            
            if(empty($nom)) {?>
                <script>swal("Oops...", "Saisissez votre nom :(", "error");</script>;
            <?php }
        
            if(empty($email)) {?>
                <script>swal("Oops...", "Saisissez votre email :(", "error");</script>;
            <?php }
            
        }
        else{

            $sql = "INSERT INTO `services`(`nom`, `prenom`, `telephone`, `email`, `entreprise`, `services`, `date_debut`) VALUES (:nom, :prenom, :telephone, :email, :entreprise, :services, :date_debut)";
            $statement = $pdo->prepare($sql);

            if ($statement->execute(array(
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':telephone' => $telephone,
                ':email' => $email,
                ':entreprise' => $entreprise,
                ':services' => $services,
                ':date_debut' => $date_debut
            ) ) ) {
                ?>
                <script type="text/javascript">
                    swal("Superrrr ","Votre demande à été bien éffectuée", "success");
                </script>
            <?php }

        }

    }



?>

    <hr>

    <footer>

        <div class="container">

            <div class="row mb-4">

                <div class="col-md-3"></div>

                <div class="col-md-6 text-center">

                    <ul class="social-icons">
                        
                        <li><a class="facebook" href="https://www.facebook.com/blingbling.services/"><i class="fab fa-facebook"></i></a></li>
                        
                        <li><a class="instagram" href="https://www.instagram.com/blingbling.services/"><i class="fab fa-instagram"></i></a></li>
                        
                        <li><a class="whatsapp" href="https://wa.me/22899272619"><i class="fab fa-whatsapp"></i></a></li>
                    
                    </ul>

                </div>

                <div class="col-md-3"></div>

            </div>

            <div class="row mb-5">

                <div class="col-md-4">

                    <h5 class="footer_h5">Notre sociéte</h5>
                    <br>

                    <p class="footer_text">Avec pour slogan ‘’glamour et confort’’ BLING BLING Services est un groupe de jeunes entrepreneurs Togolais dynamiques épris d’être au service de la population avec des services et produits innovants.</p>

                </div>

                <div class="col-md-4">

                    <h5 class="footer_h5">Siege social</h5>
                    <br>

                    <li>44, rue Dedemeli</li>
                    <li>Lomé, TOGO</li>

                    <hr>

                    <li><a class="linkbasse" href="tel:+22893203871">+228 93 20 38 71</a></li>
                    <li><a class="linkbasse" href="mailto:servicesblingbling@gmail.com">servicesblingbling@gmail.com</a></li>

                </div>

                <div class="col-md-4">

                    <h5 class="footer_h5">Heure d'ouverture</h5>
                    <br>

                    <li>Lun - Ven : 8h - 19h</li>
                    <li>Samedi : 10h - 17h</li>
                    <li>Fermé les dimanches</li>

                </div>

            </div>

            <div class="row mt-3">

                <div class="col-md-12 text-center link_externes">

                    <a href="../Nos-pages/Mentions-légales/index.html" class="mr-5">Mentions légales</a>

                    <a href="../Nos-pages/Conditions-utilisations/index.html" class="mr-5">Conditions d'utilisations</a>

                    <a href="../Nos-pages/Politique-confidentialité/index.html" class="mr-5">Politique de confidentialité</a>



                </div>

            </div>

            <div class="row">

                <div class="col-md-12 text-center mt-3">

                    <p>© 2023 par BlingBling.Services. Créé par <a href="http://datkominformatics.com" target="_blank" rel="noopener noreferrer" id="datkomlink">DATKOM-INFORMATICS</a></p>

                </div>

            </div>

        </div>

    </footer>

    <script src="../Design/Outils/all.min.js"></script>
    <script src="../Design/Outils/bootstrap.js"></script>
    <script src="../Design/Outils/jquery-3.4.1.min.js"></script>

    <script src="../Design/Js/style.js"></script>
</body>
</html>