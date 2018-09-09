<?php
session_start();
	include('config.php');
	
$re=$_GET['y'];
$id=$_GET['id'];

if(isset($_SESSION['name']))
{$uid=$_SESSION['id'];
	$q="insert into review values('',$id,'$re',$uid,CURRENT_TIMESTAMP);";
$d=mysql_query($q);
?>
<script>
var i = <?php echo $id; ?>;
window.location.href="alldetails.php?id="+i;
alert("Review successfully added")</script>
<?php
	}
	else
	{?>
<script>
var i = <?php echo $id; ?>;
window.location.href="alldetails.php?id="+i;
alert("You need to Login");
</script>
<?php } ?>