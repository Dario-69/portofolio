<?php
    //DB Config
    require_once '../config/index.php';

    //vars
    $nom = '';
    $email = '';
    $password = '';

    $nom_err = $prenom_err = $email_err = $password_err = '';


    //
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $nom =  trim($_POST['nom']);
        $email =  trim($_POST['email']);
        $password =  trim($_POST['password']);

        //
        if(empty($email)){

        }
        else{
            $sql = 'SELECT id FROM users WHERE email = :email';

            if($stmt = $pdo->prepare($sql)){
                //
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);

                //
                if($stmt->execute()){
                    // Check if email exists
                    if($stmt->rowCount() === 1){
                        echo "<script>alert(\"Email déjà utilisé\")</script>";
                    }
                } else {
                    die('Something went wrong');
                }
            }

            unset($stmt);

        }

        //
        if(empty($nom)){
            echo "<script>alert(\"Inscrivez votre nom svp\")</script>";
        }
      
        // Validate password
        if(empty($password)){
            echo "<script>alert(\"Créer un mot de passe svp\")</script>";
        } elseif(strlen($password) < 6){
            echo "<script>alert(\"Un mot de passe de plus d 6 charactères\")</script>";
        }

        //
        if(empty($nom_err) && empty($prenom_err) && empty($email_err) && empty($password_err)){

            $password = password_hash($password, PASSWORD_DEFAULT);

            //
            $sql = 'INSERT INTO users (nom, email, password) VALUES (:nom, :email, :password)';

            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':password', $password, PDO::PARAM_STR);

                // Attempt to execute
                if($stmt->execute()){
                    header('location: index.php');
                } else {
                    die('Something went wrong');
                }


            }

        }

    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Design/Outils/all.min.css">
    <link rel="stylesheet" href="../Design/Outils/animate.min.css">
    <link rel="stylesheet" href="../Design/Outils/bootstrap.css">

    <link rel="stylesheet" href="../Design/CSS/index.css">
    <link rel="stylesheet" href="../Design/CSS/style.css">
    <link rel="stylesheet" href="../Design/CSS/login.css">

    <link rel="shortcut icon" href="../Design/Img/favicon_io/favicon-32x32.png" type="image/x-icon">

    <title>BlingBlingServices</title>
</head>
<body>

    <div class="container">

        <div class="row" style="height: 100vh;">

            <div class="col-md-12 mt-4">

                <div class="row mb-4">

                    <div class="col-md-12">

                        <h1>Créer votre compte !</h1>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <form action="" method="post">

                            <label for="">Votre Nom</label>
                            <input type="text" name="nom" id="" class="form-control ifc">

                            <br>

                            <label for="">Votre adresse email</label>
                            <input type="email" name="email" id="" class="form-control ifc">

                            <br>

                            <label for="">Créer  un mot de passe</label>
                            <input type="password" name="password" id="" class="form-control ifc">

                            <br><br>

                            <input type="submit" value="Se connecter" class="form-control sub_mit">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="../Design/Outils/all.min.js"></script>
    <script src="../Design/Outils/bootstrap.js"></script>
    <script src="../Design/Outils/jquery-3.4.1.min.js"></script>

</body>
</html>