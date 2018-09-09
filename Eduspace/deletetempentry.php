<?php
	include('config.php');
	$x = $_GET['x'];
	$q = "delete from temp_institutes where id='$x'";
	$d = mysql_query($q);
	$q = "delete from temp_links where idinst='$x'";
	$d = mysql_query($q);
	$q = "delete from temp_filters where idinst='$x'";
	$d = mysql_query($q);
	$q = "delete from temp_facilities where idinst='$x'";
	$d = mysql_query($q);
	
	header('location:admin_index.php');
?>