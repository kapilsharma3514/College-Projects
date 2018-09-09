<?php
	session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/search_config.css">
<link href='https://fonts.googleapis.com/css?family=Play|Orbitron:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/sidenav.css">
<link type="text/javascript" href="script/home.js">
<link rel="icon" href="images/icon.png">
<script src="script/jquery-1.11.3.min.js">
</script>
<script>

	$(document).ready(function(){
		
	$(window).scroll(function() { 
		var scroll = $(window).scrollTop();
        if (scroll > 4) {
			$("#log").attr('src','images/icon.png');
			$(".header").addClass('smaller');
			$(".smaller").removeClass('header');
			$(".lul").removeClass("drop_it_down");
			$(".lul").addClass("smaller_drop_it_down");
		}
		else {
			$("#log").attr('src','images/logo2.png');
            $(".smaller").addClass("header");
			$(".header").removeClass("smaller");
			$(".smaller_drop_it_down").addClass("drop_it_down");
			$(".drop_it_down").removeClass("smaller_drop_it_down");
		}
    });
	
	$("#Login").click(function(){
		$(".lul").toggle();
	});	
		
	});
</script>

<title>Team</title>

</head>

<body >


<?php
	include('head.php');
?>


<div class="about_us container-fluid" style="height:auto; text-align:center; margin-top:100px;">
<div class="page_title"><h1>TEAM</h1></div>
<div class="im" style="border-radius:3px;">
<img src="images/meetings-team-building.jpg" height="50%" width="100%"></div>

<div class="txt">
<table border="1" width="100%" cellpadding="10">
<tr>
<td>
<img src="images/team/shubhanshu.jpg" width="150px" height="160px">
</td>
<td>
<h3>Shubhanshu Kumar</h3>
</td>
</tr>
<tr>
<td>
<img src="images/team/mani.jpg" width="150px" height="160px">
</td>
<td>
<h3>Mani Sharma</h3>
</td>
</tr>
<tr>
<td>
<img src="images/team/kapil.jpg" width="150px" height="160px">
</td>
<td>
<h3>Kapil Sharma</h3>
</td>
</tr>
<tr>
<td>
<img src="images/team/aakash.jpg" width="150px" height="160px">
</td>
<td>
<h3>Aakash Jain</h3>
</td>
</tr>
</table>
</div>





</div>











<?php
	include('foot.php');
?>

</div>
</body>
</html>
