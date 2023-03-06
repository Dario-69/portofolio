<?php

    // session_start();

    //
    require_once '../config/index.php';


    // Process form when post submit
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Sanitize POST
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Put post vars in regular vars
        $email =  trim($_POST['email']);
        $password =  trim($_POST['password']);

        // Validate email && password
        if(empty($email) && empty($password)){
            echo "<script>alert(\"Les champs sont vides\")</script>";
        }
        else{

            // Prepare query
            $sql = 'SELECT id, email, password FROM users WHERE email = :email';

            // Prepare statement
            if($stmt = $pdo->prepare($sql)){

                // Bind params
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);

                // Attempt execute
                if($stmt->execute()){

                    // Check if email exists
                    if($stmt->rowCount() === 1){

                        if($row = $stmt->fetch()){

                            $hashed_password = $row['password'];

                            if(password_verify($password, $hashed_password)){

                                // SUCCESSFUL LOGIN
                                session_start();

                                $_SESSION["email"] = $email;
                                $_SESSION["id"] = $row["id"];

                                if(isset($_SESSION["id"])){
                                    header('location: dashboard/index.php');
                                }

                            } 
                            else {
                                // Display wrong password message
                                echo "<script>alert(\"Mot de passe incorrect\")</script>";
                            }

                        }

                    } 
                    else {
                        echo "<script>alert(\"Aucun compte avec cet email\")</script>";
                    }

                } else {

                    echo "<script>alert(\"Erreur\")</script>";

                }
            }
            // Close statement
            unset($stmt);

        }

        // Close connection
        unset($pdo);
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

            <div class="col-md-6 text-center pt-5">

                <img src="../design/img/logo/logo_bleu.png" alt="logo" width="10%">

                <h5>Hello Champion !<br>Sign in your account</h5>

                <form action="" method="POST" class="text-left">

                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control inpuut" placeholder="hello@example.com">

                    <br>

                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control inpuut" placeholder="******">

                    <br>

                    <div class="form-check ml-2">
                        <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                        <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                    </div>

                    <br>

                    <input type="submit" value="Sign In" class="form-control">

                    <br><br>

                    <p>Don't have an account ? Contact Administrator</p>

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