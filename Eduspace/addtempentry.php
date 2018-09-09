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
	
	$qry = "select * from temp_institutes where id='$x'";
	$data = mysql_query($qry);
	$row = mysql_fetch_array($data);
	$q = "insert into institutes set Name='".$row['name']."', Address='".$row['address']."', Contact='".$row['contact']."', Email='".$row['email']."', Principal='".$row['principal']."', Fees='".$row['fees']."', Website='".$row['website']."', Board='".$row['board']."', Image='".$row['image']."'";
	$d = mysql_query($q);
	$q = "select id from institutes order by id desc limit 1";
	$d = mysql_query($q);
	$qr = mysql_fetch_array($d);
	$newid=$qr["id"];
	if ($d>0)
	{
		echo "<script>alert('Institute Added')</script>";
	}
	
	$qry = "select * from temp_links where idinst='$x'";
	$data = mysql_query($qry);
	while($row = mysql_fetch_array($data)) {
		echo $row['idbuild']."found";
	$q = "insert into links set IdBuild='".$row['IdBuild']."', idinst='".$newid."'";
	$d = mysql_query($q);
	if ($d>0)
	{echo "<script>alert('Links Added')</script>";
	}
	}
	
	$qry = "select * from temp_facilities where idinst='$x'";
	$data = mysql_query($qry);
	while ($row = mysql_fetch_array($data))
	{ $q = "insert into facilities set idinst='".$newid."', facilities='".$row['facilities']."'";
	  $d = mysql_query($q);
		if ($d>0)
		{echo "<script>alert('Facility Added')</script>";
		}
	}
		
	$qry = "select * from temp_filters where idinst='$x'";
	$data = mysql_query($qry);
	$row = mysql_fetch_array($data);
	$q = "insert into links set idinst='".$newid."', pool='".$row['pool']."', hostel='".$row['hostel']."', sports='".$row['sports']."', music='".$row['music']."', dance='".$row['dance']."', ac='".$row['ac']."', transport='".$row['pool']."', smartclass='".$row['smartclass']."', govt='".$row['govt']."', pvt='".$row['pvt']."', charity='".$row['pool']."', ugc='".$row['ugc']."', csir='".$row['csir']."', state='".$row['state']."', eng='".$row['eng']."', med='".$row['med']."', art='".$row['art']."', man='".$row['man']."', coed='".$row['coed']."', girls='".$row['girls']."', boys='".$row['boys']."', day='".$row['day']."'";
	$d = mysql_query($q);
	if ($d>0)
	{echo "<script>alert('Filter Added')</script>";
	}
	
	
	$q = "delete from temp_institutes where id='$x'";
	$d = mysql_query($q);
	$q = "delete from temp_links where idinst='$x'";
	$d = mysql_query($q);
	$q = "delete from temp_filters where idinst='$x'";
	$d = mysql_query($q);
	$q = "delete from temp_facilities where idinst='$x'";
	$d = mysql_query($q);
	
	//header('location:admin_index.php');
	/*
	INSERT tbl (Col1, Col2, ..., ColN)
  SELECT Col1, Col2, ..., ColN
  FROM Tbl2
  WHERE ...
	*/

	//header('location:admin_index.php');
?>