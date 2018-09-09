<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$uid=$_GET['uid'];
$con=mysqli_connect("mysql2.000webhost.com","a2561222_studycl","minor12","a2561222_studycl");
if (mysqli_connect_errno($con))
{
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"select * from detail_user where uid='$uid' ");
$row = mysqli_fetch_array($result);
session_start();
$_SESSION["fname"] = $row["fname"];
$_SESSION["lname"] = $row["lname"];
$_SESSION["email"] = $row["email"];
echo "<script>
					window.location.href='dash/index.php'
					</script>";
?>
</body>
</html>