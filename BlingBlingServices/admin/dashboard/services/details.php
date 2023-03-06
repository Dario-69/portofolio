<?php 

session_start();

include_once '../../../config/index.php';

if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header('location: ../../index.php');
  exit;
}
  
if(isset($_GET['id'])){

    $id = $_GET['id'];

    if(empty($id)) {
				
		if(empty($titre)) {
			echo "<script>alert(\"Erreur\")</script>";
		}

	}else{

        $sql = "SELECT * FROM `services` WHERE id = '".$id."'";

        $sth = $pdo->prepare($sql);
        $sth->execute();
  
        $ctcts = $sth->fetch(PDO::FETCH_ASSOC);

    }

  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../Design/CSS/style.css">
    <link rel="stylesheet" href="../../../Design/CSS/index.css">
    <link rel="stylesheet" href="../../../Design/Outils/bootstrap.css">

    <link rel="apple-touch-icon" sizes="180x180" href="../../../Design/Img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../Design/Img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../Design/Img/favicon_io/favicon-16x16.png">


    <title>BlingBlingServices</title>
</head>
<body>
    
    <div class="container-fluid mt-2">

        <div class="row">

            <div class="container">

                <div class="row">

                    <div class="col-md-9 col-6">

                        <h1>Clients N°<?php echo $ctcts['id']; ?></h1>

                    </div>

                    <div class="col-md-3 col-6 p-1 text-right">

                        <a href="index.php" class="btn btn-danger">Fermer</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="container mt-3">

        <div class="row">

            <div class="col-md-1"></div>

            <div class="col-md-10">
    
                <p>Bonjour je m'appelle <?php echo $ctcts['nom']; ?> <?php echo $ctcts['prenom']; ?>. Vous pouvez me joindre sur le <a href="tel:<?php echo $ctcts['telephone']; ?>"><?php echo $ctcts['telephone']; ?></a> ou sur le <a href="mailto:<?php echo $ctcts['email']; ?>"><?php echo $ctcts['email']; ?></a></p>

                <p>Mon entreprise, c'est <?php echo $ctcts['entreprise']; ?></p>

                <p>Je cherche à me faire <?php echo $ctcts['services']; ?> à partir du <?php echo $ctcts['date_debut']; ?></p>

                <span>demande faite le <?php echo $ctcts['datedemande']; ?></span>

                <br><br>

                <a href="mailto:<?php echo $ctcts['email']; ?>" class="btn btn-primary m-1">Répondre par email</a>

                <a href="tel:<?php echo $ctcts['telephone']; ?>" class="btn btn-warning">Appeler directerment</a>

            </div>
    
            <div class="col-md-1"></div>

        </div>

    </div>


    <script src="../../../Design/Outils/bootstrap.js"></script>
    <script src="../../../Design/Outils/jquery-3.4.1.min.js"></script>
</body>
</html>