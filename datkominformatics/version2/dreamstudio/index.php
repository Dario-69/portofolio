<?php 

    //on determine la page
    if(isset($_GET['page']) && !empty($_GET['page'])){
        $currentPage = (int) strip_tags($_GET['page']);
    }else{
        $currentPage = 1;
    }

    require_once '../config/index.php';

    // Nombre de créa

    $resultstudio = $conn->query("SELECT COUNT(*) AS nb FROM dreamstudio");
    $crea = $resultstudio->fetch_assoc();

    $crea_nb = (int) $crea['nb'];

    $parPage = 6;

    $pages = ceil($crea_nb/$parPage);

    $premier = ($currentPage * $parPage) - $parPage;


    $sql = "SELECT * FROM dreamstudio ORDER BY id DESC LIMIT $premier, $parPage";
    $query = mysqli_query($conn, $sql);

    $creations = $query->fetch_all(MYSQLI_ASSOC);

    // $result = $conn->query("SELECT * FROM dreamstudio ORDER BY id DESC LIMIT 0, 6");
    // $dreams = $result->fetch_all(MYSQLI_ASSOC);

    $row_cnt = $query->num_rows;


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description -->
    <meta name="description" content="Notre lieu secret où nos créatifs donnent vie à vos rêves.">

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

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        <!-- Slick -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
        <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <!--  -->

    <title>dreamstudio • datkominformatics • Agence web créative</title>
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
            
                                    <li><a href="">Dream Studio</a></li>
            
                                    <li><a href="../contact/">Contact</a></li>

                                    <li><a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous">Prendre rendez-vous  <i data-feather="arrow-up-right"></i></a></li>

                                    <li><a href="../projet/">Démarrer un projet <i data-feather="arrow-right"></i></a></li>

            
                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <!-- Header Nav End -->

    <!-- Header CTA -->

        <div class="container-fluid"  id="dreamstudio-header-cta">

            <div class="container header-cta">

                <div class="row">
    
                    <div class="col-md-9">
    
                        <h1 id="DreamStudio-title"></h1>
    
                    </div>
    
                </div>
    
            </div>

        </div>

    <!-- Header CTA End -->


    <!-- Portfolio -->

        <div class="container">

            <div class="row" id="dreamstudio-row">

                <?php 
                                
                    if($row_cnt > 0){
                
                ?>

                    <?php foreach ($creations as $creation): ?>

                        <div id="dreamstudio-case">

                            <a href="creation/?nom=<?= $creation['nom']; ?>">

                                <img src="../assets/img/dreamstudio/cover/<?php echo $creation['cover'] ?>" alt="<?php echo $creation['nom'] ?>" width="100%">
                                <h1 id="dreamstudio-case-title"><?php echo $creation['nom'] ?></h1>
                                <h4 id="case-category" style="font-family: Gilroy_Light"><?php echo $creation['categorieP'] ?></h4>

                            </a>

                        </div>

                    <?php endforeach ?>

                <?php }

                    else { 
                ?>

                    <br>
                    <h2 class="mt-5 text-center">Les génies 🤯 sont en studio en train de préparer une création✨</h2>
                    <div class="mt-3 mb-5 text-center">

                        <a href="projet/" class="start-project-btn">Démarrer un projet <i data-feather="arrow-right"></i></a>

                    </div>
                    <br>

                <?php } ?>

            </div>

            <div class="row justify-content-center">

                <div class="col-md-6 text-center">

                    <nav class="navbar">

                        <a class="<?= ($currentPage == 1) ? "none_page" : "" ?>" href="./?page=<?= $currentPage - 1 ?>">Page précédente</a>
                        <a class="<?= ($currentPage == $pages) ? "none_page" : "" ?>" href="./?page=<?= $currentPage + 1 ?>">Page suivante</a>

                    </nav>

                </div>

            </div>

        </div>
    
    <!-- Portfolio End -->

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
                        <a href="../projet/">Démarrez un projet<i data-feather="arrow-right"></i></a>

                    </div>

                    <div class="col-md-4" id="liensPrincipales">

                        <a href="../">L'agence</a> <br>
                        <a href="">Dream Studio</a> <br>
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