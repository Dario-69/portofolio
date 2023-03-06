<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db="datkominformatics";
$conn = mysqli_connect($servername, $username, $password,$db);

$nom=$_POST['nom'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$want=$_POST['want'];
$about=$_POST['about'];
$sql = "INSERT INTO `web`(`nom`,`phone`,`email`,`want`,`about`) VALUES ('$nom','$phone','$email','$want','$about')";
if (mysqli_query($conn, $sql)) {
  echo json_encode(array("statusCode"=>200));
} 
else {
  echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);
   

?>