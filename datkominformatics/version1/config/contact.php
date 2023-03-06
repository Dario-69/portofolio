<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db="datkominformatics";
$conn = mysqli_connect($servername, $username, $password,$db);

$nom=$_POST['nom'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql = "INSERT INTO `messages`(`nom`,`phone`,`email`,`message`) VALUES ('$nom','$phone','$email','$message')";
if (mysqli_query($conn, $sql)) {
  echo json_encode(array("statusCode"=>200));
} 
else {
  echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
   

?>