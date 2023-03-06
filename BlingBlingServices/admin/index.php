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

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-8 p-5">

                <h2>Hello, <br>
                Welcome back</h2>

                <form action="" method="post" class="mt-5">

                    <input type="email" name="email" placeholder="Email" id="" class="form-control ifc">
                    <br><br>
                    
                    <input type="password" name="password" placeholder="Password" id="" class="form-control ifc">
                    <br><br>

                    <input type="submit" name="user_submit" value="Se connecter" class="form-control sub_mit">
                </form>

            </div>

            <div class="col-md-4">

            </div>

        </div>

    </div>

    <?php
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

    <script src="../Design/Outils/all.min.js"></script>
    <script src="../Design/Outils/bootstrap.js"></script>
    <script src="../Design/Outils/jquery-3.4.1.min.js"></script>

</body>
</html>