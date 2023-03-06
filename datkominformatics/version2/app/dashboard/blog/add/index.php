<?php 

  require_once '../../../../config/index.php';
  session_start();

  if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: ../../../index.php');
    exit;
  }

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
  <link href="../../../../assets/img/Brands/Logo-Blue.svg" rel="icon">
  <link href="../../../../assets/img/Brands/Logo-Blue.svg" rel="apple-touch-icon">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  <!-- data-table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

  <!-- App Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../../../assets/css/dashboard.css" rel="stylesheet">

  <!-- feather icon -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

  <!-- summernote -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../" class="logo d-flex align-items-center">
        <img src="../../../../assets/img/Brands/Logo-Blue.svg" alt="logo">
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
        <a class="nav-link collapsed" href="../../">
          <i data-feather="grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Le site web</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../messages/">
          <i data-feather="message-circle"></i>
          <span>Messages</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../projets/">
          <i data-feather="coffee"></i>
          <span>Projets</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../dreamstudio/">
          <i data-feather="loader"></i>
          <span>Dream Studio</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="../../blog/">
          <i data-feather="edit-3"></i>
          <span>Blog</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../juridics/">
          <i data-feather="file-text"></i>
          <span>Docs Juridiques</span>
        </a>
      </li><!-- End Login Page Nav -->


      <li class="nav-heading">Arrêt</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../logout/">
          <i data-feather="log-out"></i>
          <span>Deconnexion</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ecrivez votre article</h5>
            
              <hr>

              <form action="" method="post" enctype="multipart/form-data">

                <label for="">Quel est le sujet de l'article</label>
                <br>
                <select name="sujet" id="sujet" class="form-control">
                  <option value=""></option>
                  <option value="Branding">Branding</option>
                  <option value="Design">Design</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Web">Web</option>
                </select>

                <br>

                <label for="">Quel est le titre ?</label>
                <input type="text" name="titre" id="" class="form-control">
                <br>


                <label>Choisissez un cover</label>
                <input type="file" name="cover" class="form-control">
                <br>
                

                <label for="">Rédigez votre article</label>
                <br>

                <textarea class="summernote" name="contenu" id="summernote"></textarea>
                <br>

                <div class="text-end">

                  <button class="contact-btn">Annuler</button>
                  <button type="submit" name="submit" class="contact-btn" id="contact-submit">Envoyer</button>

                </div>

              </form>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i data-feather="arrow-up"></i></a>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

  <!-- <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> -->

  <script>
    
    feather.replace();

    $(document).ready(function() {
        $('.datatable').DataTable();
    } );

    $('#summernote').summernote({
      toolbar : [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
      ],
      height: 290, 
      fontNames: ['Gilroy_Light']
    });

  </script>

</body>
</html>
<?php 

  if(isset($_POST['submit'])){

    // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // 

    $titre = trim(addslashes($_POST['titre']));
    $sujet = trim($_POST['sujet']);
    $contenu = filter_var(htmlentities($_POST["contenu"]), FILTER_SANITIZE_STRING);

    //Cover

    $output_dir = "../../../../assets/img/blog/";/* Path for file upload */

    move_uploaded_file($_FILES["cover"]["tmp_name"],$output_dir . $_FILES["cover"]["name"]);
    $cover = $_FILES["cover"]["name"];         


    if(empty($titre) && empty($sujet)){
      ?>
      
        <script>
          swal("Oops...", "les champs nom & catégorie principale sont vides :(", "error");
        </script>

      <?php
    } else{

      $sql = "INSERT INTO `blog` (`sujet`, `titre`, `cover`, `contenu`) VALUES('$sujet','$titre','$cover','$contenu')";

      if (mysqli_query($conn, $sql)) {
        ?>

          <script>
            swal("Réussi","Votre projet a été ajouté", "success");
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
