<?php 

  session_start();
    
    require_once '../../../../config/index.php';

    if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
      header('location: ../../../index.php');
      exit;
    }

    //add
    if(isset($_POST['submit'])){

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $what = trim($_POST['what']);
        $nom = trim($_POST['nom']);
        $datedebut = trim($_POST['datedebut']);
        $message = trim($_POST['message']);

        if(empty($nom) && empty($datedebut) && ($message)){
            echo "vide";
        } else {

            $sql = "INSERT INTO `careers`(`what`, `nom`, `datedebut`, `message`) VALUES (:what, :nom, :datedebut, :message) ";
            $query = $pdo->prepare($sql);

            if ($query->execute(array(
                ':what' => $what,
                ':nom' => $nom,
                ':datedebut' => $datedebut,
                ':message' => $message,

            ))){
                ?>
                <script type="text/javascript">

                    alert('Offers added successfully');

                </script>
            <?php }

        }

    }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>datkominformatics • Agence web créative à Lomé</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="../../assets/images/nom_bleu.png" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="../../assets/images/logo_bleu.png" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">Champion</span></h1>
            <h3 class="welcome-sub-text">Your performance summary this week </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon mdi mdi-calendar-check-outline"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
 
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
 
 
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Apps</li>
          <li class="nav-item">
            <a class="nav-link" href="../../newsletters/index.php">
              <i class="mdi mdi-view-list menu-icon"></i>
              <span class="menu-title">Newsletters List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../messages/index.php">
              <i class="mdi mdi-message-outline menu-icon"></i>
              <span class="menu-title">Messages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-check-outline"></i>
              <span class="menu-title">Services</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../services/branding/index.php">Branding</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../services/design/index.php">Design</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../services/marketing/index.php">Marketing</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../services/web/index.php">web</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../services/projects/index.php">project complete</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../blog/index.php">
              <i class="mdi mdi-comment-outline menu-icon"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../users/index.php">
              <i class="mdi mdi-account-outline menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item nav-category">Others Apps</li>
          <li class="nav-item">
            <a class="nav-link" href="../../portfolio/index.php">
              <i class="mdi mdi-cards-outline menu-icon"></i>
              <span class="menu-title">Portfolio</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../careers/index.php">
              <i class="mdi mdi-account-multiple-plus menu-icon"></i>
              <span class="menu-title">Careers</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../logout/index.php">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">logout</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-start">
                        <div>
                          <h4 class="card-title card-title-dash">Ajouter une offre d'emploi</h4>
                        </div>
                    </div>

                    <form class="mt-3" method="POST">

                        <div class="form-group">

                            <label for="exampleSelectGender">Quel type d'offre ?</label>
                            <select class="form-control" name="what" id="exampleSelectGender">
                                <option></option>
                                <option value="Emploi">Emploi</option>
                                <option value="Stage">Stage</option>
                            </select>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputName1">Nom de l'offre</label>
                          <input type="text" name="nom" class="form-control" id="exampleInputName1" placeholder="Assistant chef marketing">
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Date de début</label>
                            <input type="date" name="datedebut" class="form-control" id="exampleInputName1" placeholder="Assistant chef marketing">
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">A propos du projet </label>
                            <textarea class="form-control" name="message" id="" cols="30" rows="3" ></textarea>
                        </div>



                        <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>

                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. Tous droits réservés.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script>
          $('#summernote').summernote();
  </script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../assets/js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

