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
        <a class="nav-link " href="../../dreamstudio/">
          <i data-feather="loader"></i>
          <span>Dream Studio</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="../../blog/">
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
              <h5 class="card-title">Création d'un nouveau projet</h5>
            
              <hr>

              <form action="" method="post" enctype="multipart/form-data">

                <label for="">Quel est le nom du projet ?</label><br>
                <input type="text" name="nom" id="" class="form-control">
                <br>
                
                <label for="">Catégorie principale</label><br>
                <select name="categorieP" id="" class="form-control">
                  <option value=""></option>
                  <option value="Branding">Branding</option>
                  <option value="Design">Design</option>
                  <option value="Marketing">Marketing</option>
                  <option value="Web">Web</option>
                </select>
                <br>

                <label for="">Sous catégorie ou categorie supplémentaire</label><br>
                <div class="text-secondary pt-2">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="categorieS[]" value="Identité de marque">
                    <label class="form-check-label" for="inlineCheckbox1">Identité de marque</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="categorieS[]" value="Identité visuelle">
                    <label class="form-check-label" for="inlineCheckbox2">Identité visuelle</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="categorieS[]" value="Logo design">
                    <label class="form-check-label" for="inlineCheckbox3">Logo design</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="categorieS[]" value="Packaging design">
                    <label class="form-check-label" for="inlineCheckbox4">Packaging design</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="categorieS[]" value="UX/UI design">
                    <label class="form-check-label" for="inlineCheckbox5">UX/UI design</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="categorieS[]" value="Design graphique">
                    <label class="form-check-label" for="inlineCheckbox6">Design graphique</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="categorieS[]" value="Strategie marketing digital">
                    <label class="form-check-label" for="inlineCheckbox7">Strategie marketing digital</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="categorieS[]" value="Campagne de pub">
                    <label class="form-check-label" for="inlineCheckbox8">Campagne de pub</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" name="categorieS[]" value="Site vitrine">
                    <label class="form-check-label" for="inlineCheckbox9">Site vitrine</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" name="categorieS[]" value="Site e-commerce">
                    <label class="form-check-label" for="inlineCheckbox10">Site e-commerce</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" name="categorieS[]" value="CMS">
                    <label class="form-check-label" for="inlineCheckbox11">CMS</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12" name="categorieS[]" value="Application web">
                    <label class="form-check-label" for="inlineCheckbox12">Application web</label>
                  </div>
                </div>
                <br>

                <label for="">A propos du projet</label>
                <textarea name="info" id="" class="form-control" cols="30" rows="5"></textarea>
                <br>

                <label>Choisissez un cover</label>
                <input type="file" name="cover" class="form-control">
                <br>
                

                <label for="">Ajouter les photos du projet</label><br>
                <input type="file" name="images[]" class="form-control" multiple="multiple">
                <br>


                <label for="">Un lien du projet</label><span class="text-secondary"> ( siteweb/réseaux sociaux/... )</span><br>
                <input type="text" name="lienprojet" id="" class="form-control" placeholder="https://www.datkominformatics.com">
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

  <script>
    
    feather.replace();

    $(document).ready(function() {
        $('.datatable').DataTable();
    } );

    $('#summernote').summernote({
      height: 290, 
    });

  </script>

  <!-- sweet alert -->


</body>
</html>
<?php 

  if(isset($_POST['submit'])){

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // 

    $nom = trim(addslashes($_POST['nom']));
    $categorieP = trim($_POST['categorieP']);
    $categorieS = $_POST['categorieS'];
    $info = trim($_POST['info']);
    $lienprojet = trim($_POST['lienprojet']);

    $chk_cs="";

    foreach($categorieS as $ctrS){
      $chk_cs .= $ctrS." • ";
    }

    //Cover
      $output_dir = "../../../../assets/img/dreamstudio/cover/";/* Path for file upload */

      /* Try to create the directory if it does not exist */
      if (!file_exists($output_dir)){
        @mkdir($output_dir, 0777);
      }      
      move_uploaded_file($_FILES["cover"]["tmp_name"],$output_dir . $_FILES["cover"]["name"]);
      $cover = $_FILES["cover"]["name"];         

    // Cover end

    // Images
    $imagesDir = '../../../../assets/img/dreamstudio/images/';
    $allowTypes = array('jpg','png','jpeg','gif');

    if(!empty(array_filter($_FILES['images']['name']))){
        foreach($_FILES['images']['name'] as $key=>$val){
          $filename = basename($_FILES['images']['name'][$key]);
          $targetFile = $imagesDir.$filename;
          if(move_uploaded_file($_FILES["images"]["tmp_name"][$key], $targetFile)){
              // $success[] = "Uploaded $filename";
              $insertQrySplit[] = "$filename";
          }
          else {
            ?>

            <script>
              swal("Oops...", "Quelque chose s'est mal placée :(", "error");
            </script>
  
          <?php          }
        }
    }
    

    if(empty($nom) && empty($categorieP) && empty($insertQrySplit)){
      ?>
      
        <script>
          swal("Oops...", "les champs nom & catégorie principale sont vides :(", "error");
        </script>

      <?php
    } else{

      $dreamImage = implode(",",$insertQrySplit);
      // $dreamImage = trim($insertQrySplit, ',');

      $sql = $conn -> query("INSERT INTO `dreamstudio` (`nom`, `categorieP`, `categorieS`, `info`, `cover`, `images`, `lienprojet`) VALUES('$nom','$categorieP','$chk_cs','$info','$cover','". $dreamImage . "','$lienprojet')");

      if($sql) {
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

<?php


  // $images_path = "../../../../assets/img/dreamstudio/images/";
  //     if (!file_exists($images_path)){
  //       @mkdir($images_path, 0777);
  //     }      

  //     $total_image = count($_FILES['images']['name']);
  //     for( $i=0 ; $i < $total_image ; $i++ ){

  //       $tmpFilePath = $_FILES['images']['tmp_name'][$i];

  //       if ($tmpFilePath != ""){

  //         $newFilePath = $images_path . $_FILES['images']['name'][$i];

  //         move_uploaded_file($tmpFilePath, $newFilePath);

  //         $dreamImage = $_FILES["images"]["name"][$i];

  //         $dreamImage = trim($dreamImage, ',');

  //       }

  // }

?>