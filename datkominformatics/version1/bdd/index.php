<?php
  // DB Credentials
  // define('DB_SERVER', 'localhost');
  // define('DB_USERNAME', 'u302706399_darioancien');
  // define('DB_PASSWORD', 'Datkom_694316');
  // define('DB_NAME', 'u302706399_informatics');

  $servername = "localhost";
  $username = "u302706399_darioancien";
  $password = "Datkom_694316";
  $dbname = "u302706399_informatics";

  // Attempt to connect to MySQL
  // try {
  //   $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
  // } catch(PDOException $e) {
  //   die("ERROR: Could not connect. " . $e->getMessage());
  // }

  try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>
  