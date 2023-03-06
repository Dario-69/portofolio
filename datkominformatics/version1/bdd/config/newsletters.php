<?php 

$servername = "localhost";
$username = "u302706399_darioancien";
$password = "Datkom_694316";
$db="u302706399_informatics";
$conn = mysqli_connect($servername, $username, $password,$db);

$email=$_POST['email'];
$sql = "INSERT INTO `newsletters`(`email`) VALUES ('$email')";
if (mysqli_query($conn, $sql)) {
  echo json_encode(array("statusCode"=>200));
} 
else {
  echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
   

?>