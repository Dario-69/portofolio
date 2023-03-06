<?php 

  session_start();

  require_once '../../config/index.php';

  if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: ../index.php');
    exit;
  }

  $resultsms = $conn->query("SELECT COUNT(*) AS nb FROM messages");
  $messages = $resultsms->fetch_assoc();

  $resultpro = $conn->query("SELECT COUNT(*) AS nb FROM projets");
  $projets = $resultpro->fetch_assoc();

  $resultblog = $conn->query("SELECT COUNT(*) AS nb FROM blog");
  $blog = $resultblog->fetch_assoc();

  $resultstudio = $conn->query("SELECT COUNT(*) AS nb FROM dreamstudio");
  $dream = $resultstudio->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>datkominformatics • Agence web créative</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/Brands/Logo-Blue.svg" rel="icon">
  <link href="../../assets/img/Brands/Logo-Blue.svg" rel="apple-touch-icon">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- Vendor CSS Files -->    
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- App Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/dashboard.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="../../assets/img/Brands/Logo-Blue.svg" alt="logo">
        <span class="d-none d-lg-block">datkominformatics</span>
      </a>
      <!-- <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item p-2">
          
          <a href="javascript:void(0)"  class="bi bi-list toggle-sidebar-btn">
            <i data-feather="menu"></i>
          </a>

        </li>

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../">
          <i data-feather="grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Le site web</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="messages/">
          <i data-feather="message-circle"></i>
          <span>Messages</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="projets/">
          <i data-feather="coffee"></i>
          <span>Projets</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="dreamstudio/">
          <i data-feather="loader"></i>
          <span>Dream Studio</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="blog/">
          <i data-feather="edit-3"></i>
          <span>Blog</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="juridics/">
          <i data-feather="file-text"></i>
          <span>Docs Juridiques</span>
        </a>
      </li><!-- End Login Page Nav -->


      <li class="nav-heading">Arrêt</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="logout/">
          <i data-feather="log-out"></i>
          <span>Deconnexion</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Messages <span> reçus</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i data-feather="message-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $messages['nb']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Projets <span>| Démarrés sur le site</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i data-feather="coffee"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $projets['nb']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Blog <span>| Articles écris</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i data-feather="file-text"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $blog['nb']; ?></h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Dream Studio <span>| Notre lab de créativité !</span></h5>
                  
                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                      <h6><?php echo $dream['nb']; ?> projets créés</h6>

                      <a href="dreamstudio/add/">Creer un nouveau projet</a>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">A savoir <span>| Ceci est une documentation</span></h5>
                  
                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                      
                      <ol>
                        <li>Pour les prises de rendez-vous, vérifiez le tableau de bord de calendly</li>
                        <li>Pour l'email marketing, Mailchimp</li>
                        <li>Il est possible de lire les messages envoyés ou les projets débutés par le client. Pour y répondre, utilisez le mail professionnel.</li>
                        <li>Le DreamStudio comme behance, permet à ce que l'on poste nos conceptions.</li>
                      </ol>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i data-feather="arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    feather.replace();
  </script>

</body>

</html>