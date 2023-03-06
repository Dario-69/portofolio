<?php
    //
    require_once '../config/index.php';

    //
    $email = $password = '';
    $email_err = $password_err = '';

    // Process form when post submit
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Sanitize POST
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Put post vars in regular vars
        $email =  trim($_POST['email']);
        $password =  trim($_POST['password']);

        // Validate email
        if(empty($email)){
        $email_err = 'Please enter email';
        }

        // Validate password
        if(empty($password)){
        $password_err = 'Please enter password';
        }

        // Make sure errors are empty
        if(empty($email_err) && empty($password_err)){
        // Prepare query
        $sql = 'SELECT uid, email, password FROM users WHERE email = :email';

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
                    $_SESSION['email'] = $email;
                    //$_SESSION['nom'] = $row['nom'];
                    $_SESSION['uid'] = $row['uid'];
                    // $_SESSION['username'] = $row['username'];
                    header('location: dashboard/index.php');
                } else {
                    // Display wrong password message
                    $password_err = 'The password you entered is not valid';
                }
                }
            } else {
                $email_err = 'No account found for that email';
            }
            } else {
            die('Something went wrong');
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

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Elwinakof</title>
</head>
<body>

    <div class="container-fluid">

        <div class="row" style="height: 100vh;">

            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-12 p-5">

                        <h1>Hello !</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut id, quasi quibusdam consectetur laborum, minima architecto, sunt tempore eius possimus cupiditate. Molestias ipsum totam rerum officia, quasi deserunt quia quo?</p>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12 p-5">

                        <form action="" method="post">

                            <label for="">Adresse email</label>
                            <input type="email" name="email" id="" class="form-control">

                            <br>

                            <label for="">Mot de passe</label>
                            <input type="password" name="password" id="" class="form-control">

                            <br><br>

                            <input type="submit" value="Se connecter" class="form-control">

                        </form>

                    </div>

                </div>

            </div>

            <div class="col-md-6" id="droite"></div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>