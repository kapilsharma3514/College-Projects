<?php
$con=mysqli_connect("mysql2.000webhost.com","a2561222_studycl","minor12","a2561222_studycl");

if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = $_GET['username'];
$password = $_GET['password'];
$result = mysqli_query($con,"select * from detail_user where email='$username' and password='$password'");
$row = mysqli_fetch_array($result);
$_SESSION["fname"] = $row["fname"];
$_SESSION["lname"] = $row["lname"];
$_SESSION["email"] = $row["email"];
echo $_SESSION["fname"];
mysqli_close($con);
?>


