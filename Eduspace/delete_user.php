<?php
		session_start();
    	if (!isset($_SESSION["name"]))
	    { echo "<script>window.location.href='index.php'</script>"; }
		$var = $_GET["x"];
		if ($_SESSION["id"]==$var)
		{		
			include('config.php');
		
			$query = "delete from users where ID='$var'";
			$data = mysql_query($query);
			if ($data==0)
			{ echo "<script>alert('Error In Deleting Profile')</script>"; }
			if ($_SESSION["id"]==$var)
			{ echo "<script>alert('Account Deleted !')</script>"; 
			  echo "<script>window.location.href='index.php'</script>"; 
			  session_unset();
			}
		}
		else
		{	echo "<script>window.location.href='index.php'</script>"; }
		
		echo "<script>window.location.href='index.php'</script>";
?>