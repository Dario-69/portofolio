<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db="datkominformatics";
$conn = mysqli_connect($servername, $username, $password,$db);

$nom=$_POST['nom'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$about=$_POST['about'];
$sql = "INSERT INTO `projects`(`nom`,`phone`,`email`,`about`) VALUES ('$nom','$phone','$email','$about')";
if (mysqli_query($conn, $sql)) {
  echo json_encode(array("statusCode"=>200));
} 
else {
  echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
   

?>