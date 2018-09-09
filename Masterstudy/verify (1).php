<?php
@include('config.php');
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
{$em=$_GET['email'];
$hash=$_GET['hash'];
$search = mysql_query("SELECT email, hash, active FROM users WHERE email='".$em."' AND hash='".$hash."' AND active='0'");
$match  = mysql_num_rows($search);
if($match > 0){
    mysql_query("UPDATE users SET active='1' WHERE email='".$em."' AND hash='".$hash."' AND active='0'");
echo "<script>window.location.href='active_login.php';</script>";
}else{
   echo"<script>alert('Invalid URL or the account has already been activated..');</script>";
}

}
else
{echo "<script>alert('Invalid Approach')</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

?>

</body>
</html>