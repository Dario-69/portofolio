<?php 

    require_once 'config/index.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description -->
    <meta name="description" content="Une agence web pour accompagner les startups dans leur développement digital. Image de marque, site internet, publicité...">

    <!-- icon -->
    <link rel="shortcut icon" href="assets/img/Brands/Logo-Blue.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/Brands/Logo-Blue.svg">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XQ4S0NR52B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-XQ4S0NR52B');
    </script>


    <!-- Links -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">

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

    <!-- End loader -->

    <!-- Header Nav -->

        <div class="head-top"></div>
        <div class="container-fluid" id="header-navbar">

            <div class="row">
    
                <div class="col-md-3 col-5">

                    <a href="" class="brand-logo" data-stick-cursor>
                        <img id="logo-abbr" src="assets/img/Brands/Logo-Blue.svg" alt="logo">
                        <img src="assets/img/Brands/Typographie.svg" id="brand-title" alt="nom">
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
                            
                            <nav class="overlay-menu">

                                <ul>

                                    <li><a href="">L'agence</a></li>
            
                                    <li><a href="dreamstudio/">Dream Studio</a></li>
            
                                    <li><a href="contact/">Contact</a></li>

                                    <li><a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous">Prendre rendez-vous <i data-feather="arrow-up-right"></i></a></li>

                                    <li><a href="projet/">Démarrer un projet <i data-feather="arrow-right"></i></a></li>

            
                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <!-- Header Nav End -->

    <!-- Header CTA -->

        <div class="container-fluid header-cta" id="homepage-header-cta">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h1>L'agence web créative<br>des startups</h1>
                    <a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous"><i data-feather="arrow-up-right"></i> Prendre rendez-vous</a>

                </div>

            </div>

        </div>

    <!-- Header CTA End -->

    <!-- Services -->

        <div class="container">

            <div class="row responsive-none">

                <div class="col-md-10">
                    <hr>
                </div>

                <div class="col-md-2 text-end">

                    <p>Nos services</p>

                </div>

            </div>

            <div class="row responsive-none mb-5">

                <div class="col-md-12" id="homepage-les-services">

                    <span class="homepage-les-services-item">Branding</span>
                    <span class="homepage-les-services-item">Design</span>
                    <span class="homepage-les-services-item">Marketing</span>
                    <span class="homepage-les-services-item">Web</span>

                </div>

            </div>

            <hr>

            <div class="row mt-5 responsive-show">

                <div class="col-md-12 text-center">

                    <h1 id="homepage-nos-services-mobile">Nos services</h1>

                </div>

            </div>

            <div class="row mt-5">

                <div class="col-md-3">

                    <div class="homepage-services-card">

                        <h4>Branding</h4>

                        <div class="homepage-services-label">

                            <span>Identité de marque</span> <span class="slash-services">/</span>
                            <span>Identité Visuelle</span> <span class="slash-services">/</span>
                            <span>Logo design</span> <span class="slash-services">/</span>
                            <span>Packaging design</span>

                        </div>

                        <br>

                        <p>Co-création de votre identité à travers un design attrayants.<br><br>Tout en oeuvre pour transmettre votre message, votre histoire, vos valeurs...<br><br>L'idée de refléter parfaitement votre entreprise.</p>
                        
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="homepage-services-card">

                        <h4>Design</h4>

                        <div class="homepage-services-label">

                            <span>UI / UX design</span> <span class="slash-services">/</span>
                            <span>Design graphique</span>

                        </div>

                        <br><br>

                        <p>L'expérience utilisateur est primordial pour l'engagement d'un client.<br><br>L'interface d'utilisateur constitue l'élément clé dudit expérience.<br><br>Nous élaborons des designs conviviaux pour souligner votre identité.</p>


                    </div>

                </div>

                <div class="col-md-3">

                    <div class="homepage-services-card">

                        <h4>Marketing</h4>

                        <div class="homepage-services-label">

                            <span>Strategie Marketing Digital</span> <span class="slash-services">/</span>
                            <span>Campagne de pub</span>

                        </div>

                        <br>

                        <p>Nous créons des campagnes pour engager et responsabiliser les clients.<br><br>Nous proposons, affinons et exécutons des stratégies qui donnent des résultats.<br><br>Qui dépasseront vos propres attentes, celles de la concurrence et celles du marché.</p>
                        
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="homepage-services-card">

                        <h4>Web</h4>

                        <div class="homepage-services-label">

                            <span>Site Web Vitrine</span> <span class="slash-services">/</span>
                            <span>Site E-commerce</span> <span class="slash-services">/</span>
                            <span>intégration CMS</span> <span class="slash-services">/</span>
                            <span>Application Web</span>

                        </div>

                        <br>

                        <p>Plonger vos utilisateurs dans l'univers unique de votre marque.<br><br>Concevoir des sites web pertinents qui vous relis à votre cible.<br><br>Donner aux marques, le moyen de gagner des conversions.</p>

                    </div>

                </div>

            </div>

            <div class="row mt-5">

                <div class="col-md-12 text-center">

                    <a href="projet/" class="start-project-btn">Démarrer un projet <i data-feather="arrow-right"></i></a>

                </div>

            </div>

        </div>

    <!-- Services End -->

    <!-- Valeurs -->

        <div class="container mt-5">

            <div class="row">

                <div class="col-md-6">

                    <h2 class="homepage-valeurs-heart">Les valeurs au coeur de tout ce que nous faisons</h2>

                </div>
                <div class="col-md-6">
                    <hr>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="slick-carousel">

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>1.</h6>
                                <hr>
                                <br>

                                <h3>Faire naître<br><strong class="true-valeurs">le beau</strong></h3>

                                <br><br>

                                <p>Nos réalisations sont des merveilles, parce que nos concepteurs attachent une attention toute particulière à leur simplicité et à leur facilité d’utilisation.</p>
                                
                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>2.</h6>
                                <hr>
                                <br>

                                <h3>Pas de compromis sur <strong class="true-valeurs">la qualité</strong></h3>

                                <br><br>

                                <p>Nous ne voulons pas que notre marque soit associée à quelque chose qui ne soit pas de la plus haute qualité.<br>Nous ne faisons rien à moitié. Nous ne faisons les choses que de la bonne manière, avec soin, savoir-faire et amour.</p>

                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>3.</h6>
                                <hr>
                                <br>

                                <h3>De la confiance à <strong class="true-valeurs">la co-création</strong></h3>

                                <br><br>

                                <p>La confiance est le lien qui nous unit. Nous nous faisons mutuellement confiance pour donner le meilleur.<br>Cette confiance sous-tend notre processus de co-creation et conduit aux meilleurs résultats.</p>
                                
                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>4.</h6>
                                <hr>
                                <br>

                                <h3>L'expérience est <strong class="true-valeurs">essentielle</strong></h3>

                                <br><br>

                                <p>Notre objectif a toujours été de créer des expériences agréables, intuitives, engageantes et remarquables pour les gens.<br>Les expériences que nous créons sont ce qui nous distingue des autres.</p>
                                
                            </div>

                        </div>

                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>5.</h6>
                                <hr>
                                <br>

                                <h3>Toujours <strong class="true-valeurs">ouverts d'esprit</strong></h3>

                                <br><br>

                                <p>Nous faisons de la place pour l'expérimentation créative et accueillons l'opportunité d'apprendre à chaque instant.<br>Cette approche curieuse nous amène à découvrir des façons surprenantes de résoudre les problèmes.</p>
                                
                            </div>

                        </div>
                        
                        <div class="homepage-valeurs-col">

                            <div class="homepage-valeurs">

                                <h6>6.</h6>
                                <hr>
                                <br>

                                <h3>Vous & nous, <strong class="true-valeurs">une famille</strong></h3>

                                <br><br>

                                <p>Travailler ensemble, c'est faire partie de quelque chose de plus grand que soi.<br>Faire partie d'une famille, c'est rejoindre une communauté passionnée.<br>Dans notre famille, nous partageons des rires et embrassons une passion démesurée.</p>
                                
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row justify-content-end text-end">

                <div class="col-md-6">

                    <a href="" class="Prec-btn"><i data-feather="arrow-left"></i></a>
                    <a href="" class="Suiv-btn"><i data-feather="arrow-right"></i></a>

                </div>

            </div>

            <div class="row mt-5 mb-5">

                <div class="col-md-12 text-center">

                    <a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous" class="prise-rdv"><i data-feather="arrow-up-right"></i> Prendre rendez-vous</a>

                </div>

            </div>

        </div>

    <!-- Valeurs End -->

    <!-- Team -->

        <div class="container-fluid">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 text-center">

                        <h1 class="homepage-team-title">L'équipe</h1>

                    </div>

                </div>

                <div class="row responsive-team-grid mt-5 mb-5">

                    <div class="col">

                        <div class="homepage-team-member text-center">

                            <img src="assets/img/Teams/monsieur_O.PNG" alt="Monsieur O">
                            <h6>Monsieur O</h6>
                            <p>Designer</p>

                        </div>

                    </div>

                    <div class="col">

                        <div class="homepage-team-member text-center">

                            <img src="assets/img/Teams/sir.PNG" alt="Sir">
                            <h6>BM</h6>
                            <p>Responsable projet</p>

                        </div>

                    </div>

                    <div class="col">

                        <div class="homepage-team-member text-center">

                            <img src="assets/img/Teams/Black_pharaon.PNG" alt="Black Pharaon">
                            <h6>Black Pharaon</h6>
                            <p>Developpeur</p>

                        </div>

                    </div>

                    <div class="col">

                        <div class="homepage-team-member text-center">

                            <img src="assets/img/Teams/bob.PNG" alt="Bob">
                            <h6>Bob</h6>
                            <p>Designer</p>

                        </div>

                    </div>

                    <div class="col">

                        <div class="homepage-team-member text-center">

                            <img src="assets/img/Teams/Atavi_kpoti.PNG" alt="Atavi Kpoti">
                            <h6>Atavi Kpoti</h6>
                            <p>Responsable Marketing</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    <!-- Team End -->

    <!-- Dream Studio -->

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h1 class="homepage-dreamstudio-title">Découvrez notre<br><strong class="true-valeurs">Dream Studio</strong></h1>

                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <div class="content-wrapper">

                        <main class="grid-item main">
        
                            <div class="items">

                                <?php 
                                
                                    //$result = $conn->query("SELECT * FROM dreamstudio ORDER BY id DESC LIMIT 5");
                                    //$dream = $result->fetch_assoc();

                                    $sql = "SELECT * FROM dreamstudio ORDER BY id DESC LIMIT 5";
                                    $query = mysqli_query($conn, $sql);
                            
                                    $row_cnt = $query->num_rows;

                                    if($row_cnt > 0){
                                        
                                ?>

                                    <?php 

                                        while (($dream = mysqli_fetch_assoc($query))){

                                    
                                    ?>

                                        <a href="dreamstudio/creation/?nom=<?= $dream['nom'];?>" class="item" style="background-image: url('assets/img/dreamstudio/cover/<?= $dream['cover'];?>')">

                                            <h2><?= $dream['nom'];?></h2>
                                            <p><?= $dream['categorieP'];?></p>

                                        </a>

                                    <?php } ?>

                                <?php }

                                else { ?>

                                    <br>
                                    <p class="genie_phone text-center">Les génies 🤯 sont en studio en train de préparer une création✨</p>
                                    <div class="mt-5 text-center">

                                        <a href="projet/" class="start-project-btn">Démarrer un projet <i data-feather="arrow-right"></i></a>

                                    </div>
                                    <br>

                                <?php }

                                ?>
        
                            </div>
        
                        </main>
        
                        
                    </div>

                </div>

            </div>

        </div>

    <!-- Dream Studio End -->

    <hr class="container">

    <!-- CTA -->

        <div class="container homepage-cta">

            <div class="row">

                <div class="col-md-8">

                    <p class="responsive-textcenter">Branding, Design, Marketing & Web</p>
                    <h1 class="homepage-cta-reflexion">Vous<br>réfléchissez à<br>un projet ?</h1>

                </div>

                <div class="col-md-4">

                    <div class="row">

                        <p class="responsive-textcenter">Quel que soit le défi, nous proposons toujours une solution adaptée.</p>

                    </div>

                    <div class="row responsive-padding">

                        <a href="projet/" class="start-project-btn">Démarrez un projet<i id="cta-arrow" data-feather="arrow-right"></i></a>

                    </div>

                </div>

            </div>

            <br><br>

            <hr>

        </div>

    <!-- CTA End -->

    <!-- Footer -->

        <footer>

            <div class="container">

                <div class="row">

                    <div class="col-md-4" id="footer-contact">

                        <a href=""data-stick-cursor>
                            <img id="logo-abbr" src="assets/img/Brands/Logo-White.svg" alt="logo">
                            <img src="assets/img/Brands/Typographie-White.svg" id="brand-title" alt="nom">
                        </a>

                        <br><br>
                        <hr style="color: #fff;">

                        <a href="mailto:hello@datkominformatics.com"><i data-feather="mail"></i> hello@datkominformatics.com</a> <br>
                        <hr style="color: #fff;">
                        <a target="_blank" href="https://calendly.com/datkominformatics/prise-de-rendez-vous"><i data-feather="arrow-up-right"></i> Prendre un rendez-vous</a> <br>
                        <hr style="color: #fff;">
                        <a href="projet/">Démarrez un projet<i data-feather="arrow-right"></i></a>

                    </div>

                    <div class="col-md-4" id="liensPrincipales">

                        <a href="">L'agence</a> <br>
                        <a href="dreamstudio/">Dream Studio</a> <br>
                        <a href="contact/">Contact</a>

                    </div>


                    <div class="col-md-4" id="liensUtiles">

                        <a href="blog/">Blog</a> <br>
                        <a href="newsletters/">Newsletters</a> <br>
 
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
    <script src="assets/js/main.js"></script>
    <script src="assets/js/carousel.js"></script>

</body>
</html>