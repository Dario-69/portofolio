<?php

  //DB Config
  require_once '../config/index.php';

  $q = "SELECT * FROM blog ORDER BY id DESC LIMIT 1";

  $sth = $pdo->prepare($q);
  $sth->execute();
  $blog_infos = $sth->fetch(\PDO::FETCH_ASSOC);


?>
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
    <link rel="stylesheet" href="../design/css/sitemap.css">
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

        <!-- Header Section -->
        <div class="container-fluid" id="head-map">

            <!-- Navigation -->
            <div class="container-fluid">
    
                <div class="row">
    
                    <div class="col-md-3 col-5">
    
                        <a href="../index.php" class="brand-logo">
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

                                    <li><a class="page-link" href="../index.php">Home</a></li>
            
                                    <li><a class="page-link" href="../our-agency/index.php">Notre agence</a></li>
            
                                    <li><a class="page-link" href="../our-services/index.php">Nos services</a></li>
            
                                    <li><a class="page-link" href="../contact/index.php">Contactez-nous !</a></li>
            
                                    <li><a class="page-link wht_up" href="../blog/index.php">Blog</a></li>

            
                                </ul>
            
                            </nav>

                        </div>

                        <div class="col-md-6" id="droite_nav">

                            <ul>

                                <nav class="overlay-menu">

                                    <ul>
    
                                        <li><a class="page-link-2" href="../portfolio/index.php">Portfolio</a></li>
                
                                        <li><a class="page-link-2" href="../blog/post/index.php?id=<?= $blog_infos['id'];?>"><?php echo $blog_infos['titre'] = 'Dernier article'; ?></a></li>
                                
                                        <li><a class="page-link-2" href="../blog/index.php">Blog</a></li>
                
                                    </ul>
                
                                </nav>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Header CTA -->
            <div class="container">
    
                <div class="row">

                    <div class="col-md-12 text-center">
    
                        <h1 id="titre">Terms of use</h1>
    
    
                    </div>
    
                </div>
    
            </div>
    
        </div>

        <div class="container">

            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <h2>Terms and Conditions</h2>

                    <p>

                    Last updated: September 22, 2021<br><br>
Please read these terms and conditions carefully before using Our Service.<br><br>
Interpretation and Definitions<br><br>
Interpretation<br><br>
The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.<br><br>
Definitions<br><br>
For the purposes of these Terms and Conditions:
Affiliate means an entity that controls, is controlled by or is under common control with a party, where control means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.<br><br>
Country refers to:  United Kingdom<br><br>
Company (referred to as either the Company, we; Us; Our; in this Agreement) refers to DATKOM INFORMATICS, London, UK (company in registration)
Device means any device that can access the Service such as a computer, a cell phone or a digital tablet
Service refers to the Website.<br><br>
Terms and Conditions also referred as Terms mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.<br><br> This Terms and Conditions agreement has been created with the help of the "https://www.termsfeed.com/terms-conditions-generator/“, a “Terms and Conditions Generator”
Third-party Social Media Service means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.<br><br>
Website refers to datkominformatics, accessible from "https://www.datkominformatics.com" 
You mean the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable. <br><br>

                    </p>

                    <h2>Acknowledgment</h2>

                    <p>
                    These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.<br><br>
Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.<br><br>
By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.<br><br>
You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.<br><br>
Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.<br><br>
                    </p>

                    <h2>Links to Other Websites</h2>

                    <p>
                    Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.<br><br>
The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third-party web sites or services.<br><br> You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.<br><br>
We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.<br><br>
                    </p>

                    <h2>Termination</h2>

                    <p>
                    We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.<br><br>
Upon termination, your right to use the Service will cease immediately.<br><br>
                    </p>

                    <h2>Limitation of Liability</h2>

                    <p>
                        Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.<br><br>
To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.<br><br>
Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.<br><br>
</p>

                    <h2>AS IS; AS AVAILABLE Disclaimer</h2>
                    <p>
                    The Service is provided to You AS IS, AS AVAILABLE, and with all faults and defects without warranty of any kind.<br><br> To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice.<br><br> Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.<br><br>
Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.<br><br>
Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.<br><br>
                    </p>

                    <h2>Governing Law</h2>

                    <p>
                    The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service.<br><br> Your use of the Application may also be subject to other local, state, national, or international laws.
                    </p>

                    <h2>Disputes Resolution</h2>

                    <p>
                        If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.<br><br>
For European Union (EU) Users
If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.</p>

                    <h2>United States Legal Compliance</h2>

                    <p>
                        You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a “terrorist supporting”; country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.
                    </p>

                    <h2>Severability and Waiver </h2>

                    <p>
                    Severability<br><br>
If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.<br><br>
Waiver<br><br>
Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Terms shall not affect a party's ability to exercise such right or require such performance at any time thereafter nor shall be the waiver of a breach constitute a waiver of any subsequent breach.<br><br>
                    </p>

                    <h2>Translation Interpretation</h2>
                    <p>
                    These Terms and Conditions may have been translated if We have made them available to You on our Service.<br><br>
You agree that the original English text shall prevail in the case of a dispute.<br><br>
                    </p>

                    <h2>Changes to These Terms and Conditions</h2>
                    <p>
                    We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material, We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect.<br><br> What constitutes a material change will be determined at Our sole discretion.<br><br>
By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.<br><br>
                    </p>

                    <h2>Contact Us</h2>
                    <p>
                        If you have any questions about these Terms and Conditions, You can contact us :
                        hello@datkominformatics.com
                    </p>

                </div>

                <div class="col-md-1"></div>

            </div>

        </div>

    </div>
    
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

                        <a href="../legal-notice/index.php">Legal notice</a>

                        <br>

                        <a href="../terms-of-use/index.php">Terms of use</a>

                        <br>

                        <a href="../privacy-policy/index.php">Privacy policy</a>

                        <br>

                        <a href="../sitemap/index.php">Site Map</a>

                    </div>

                </div>

            </div>

        </div>

    </footer>

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        /*Theme Mode Setting*/
        let themeMode = sessionStorage.getItem("themeMode");

        $("#dark-toggle").click(
        function () {
            $('body').removeClass('light');
            $('body').addClass('dark');

            sessionStorage.setItem("themeMode", 'dark');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../design/img/nom/nom_blanc.png";

        })

        $("#light-toggle").click(
        function () {
            $('body').removeClass('dark');
            $('body').addClass('light');

            sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../design/img/nom/nom_bleu.png";

        })

        if (themeMode == null) {
        sessionStorage.setItem("themeMode", 'light'); //set default themeMode
        }

        if (themeMode == 'light') {
        $('body').addClass('light');
        $('body').removeClass('dark');
        sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../design/img/nom/nom_bleu.png";

        }

        if (themeMode == 'dark') {
        $('body').addClass('dark');
        $('body').removeClass('light');
        sessionStorage.setItem("themeMode", 'dark');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../design/img/nom/nom_blanc.png";

        }

        //Footer

        $("#dark-toggle-footer").click(
        function () {
            $('body').removeClass('light');
            $('body').addClass('dark');

            sessionStorage.setItem("themeMode", 'dark');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_bleu.png"
            document.getElementById("logo-compact").src="../design/img/logo/logo_bleu.png"
            document.getElementById("nom_logo").src="../design/img/nom/nom_blanc.png";

        })

        $("#light-toggle-footer").click(
        function () {
            $('body').removeClass('dark');
            $('body').addClass('light');

            sessionStorage.setItem("themeMode", 'light');

            document.getElementById("logo-abbr").src="../design/img/logo/logo_blanc.png";
            document.getElementById("logo-compact").src="../design/img/logo/logo_blanc.png";
            document.getElementById("nom_logo").src="../design/img/nom/nom_bleu.png";

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
                        url:'../config/newsletters.php', //===PHP file name====
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