<?php
    //DB Config
    require_once '../config/index.php';

    //vars
    $name = '';
    $prenom = '';
    $email = '';
    $password = '';

    //
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $nom =  trim($_POST['nom']);
        $prenom =  trim($_POST['prenom']);
        $email =  trim($_POST['email']);
        $password =  trim($_POST['password']);

        //input empty verfication
        if(empty($nom) || empty($prenom)){
            echo "<script>alert(\"Les champs sont vides\")</script>";
        }

        //Email verification
        if(empty($email)){
            echo "<script>alert(\"Inserez votre adresse email\")</script>";
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
                        echo "<script>alert(\"Email déjà prise\")</script>";
                    }
                } else {
                    echo "<script>alert(\"Erreur\")</script>";
                }
            }

            unset($stmt);

        }

        // Validate password
        if(empty($password)){
            echo "<script>alert(\"Entrer un mot de passe\")</script>";
        } elseif(strlen($password) < 6){
            echo "<script>alert(\"Password must be at least 6 characters\")</script>";
        }

        if(isset($nom) && isset($prenom) && isset($email) && isset($password)){

            $password = password_hash($password, PASSWORD_DEFAULT);

            //
            $sql = 'INSERT INTO users (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)';
            $query = $pdo->prepare($sql);

            if ($query->execute(array(
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
                ':password' => $password,
            ))){
                header('location: index.php');
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
    <link rel="shortcut icon" href="../design/img/logo/logo_bleu.png" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../design/css/style.css">

        <title>datkominformatics • Agence web créative à Lomé</title>
</head>
<body>
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3"></div>

            <div class="col-md-6 text-center pt-3">

                <img src="../design/img/logo/logo_bleu.png" alt="logo" width="10%">

                <h5>Hello Champion !<br>Sign up your account</h5>

                <br>

                <form action="" method="POST" class="text-left">

                    <div class="form-row">

                        <div class="col">

                            <label for="">Nom</label>
                            <input type="text" name="nom" id="" class="form-control inpuut" placeholder="Votre nom">

                        </div>

                        <div class="col">

                            <label for="">Prénom</label>
                            <input type="text" name="prenom" id="" class="form-control inpuut" placeholder="Votre prénom">

                        </div>

                    </div>

                    <br>

                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control inpuut" placeholder="hello@example.com">

                    <br>

                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control inpuut" placeholder="******">

                    <br>

                    <input type="submit" value="Sign Up" class="form-control">


                </form>

            </div>

            <div class="col-md-3"></div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>