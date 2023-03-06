<?php
    //DB Config
    require_once '../config/index.php';

    //vars
    $name = '';
    // $prenom = '';
    $username = '';
    $password = '';

    $nom_err = $prenom_err = $email_err = $password_err = '';


    //
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $name =  trim($_POST['name']);
        // $prenom =  trim($_POST['prenom']);
        $username =  trim($_POST['username']);
        $password =  trim($_POST['password']);

        //
        if(empty($email)){

        }
        else{
            $sql = 'SELECT id FROM users WHERE username = :username';

            if($stmt = $pdo->prepare($sql)){
                //
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);

                //
                if($stmt->execute()){
                    // Check if email exists
                    if($stmt->rowCount() === 1){
                      $email_err = 'Email is already taken';
                    }
                } else {
                    die('Something went wrong');
                }
            }

            unset($stmt);

        }

        //
        if(empty($name)){
            $nom_err = 'Please enter role';
        }
      
        // if(empty($prenom)){
        //     $prenom_err = 'Please enter username';
        // }

        // Validate password
        if(empty($password)){
            $password_err = 'Please enter password';
        } elseif(strlen($password) < 6){
            $password_err = 'Password must be at least 6 characters ';
        }

        //
        if(empty($nom_err) && empty($prenom_err) && empty($email_err) && empty($password_err)){

            $password = password_hash($password, PASSWORD_DEFAULT);

            //
            $sql = 'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)';

            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                // $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
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

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Elwinakof</title>
</head>
<body>

    <div class="container">

        <div class="row" style="height: 100vh;">

            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-12 text-center">

                        <h1>Hello !</h1>
                        <p>Inscris toi </p>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <form action="" method="post">

                            <label for="">Nom</label>
                            <input type="text" name="name" id="" class="form-control">

                            <br>

                            <!-- <label for="">Prenom</label>
                            <input type="text" name="prenom" id="" class="form-control">

                            <br> -->

                            <label for="">Username</label>
                            <input type="text" name="username" id="" class="form-control">

                            <br>

                            <label for="">Mot de passe</label>
                            <input type="password" name="password" id="" class="form-control">

                            <br><br>

                            <input type="submit" value="Se connecter" class="form-control">

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>