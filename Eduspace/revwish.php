<?php 
session_start();
include('config.php');
$id=$_GET['insid'];
$uid=$_SESSION['id'];
$ll="delete from wishlist where uid=$uid and InsId=$id;";
$m=mysql_query($ll);
?>
<script> window.location.href='fav.php';
alert("Successfully removed from favourites");
</script>